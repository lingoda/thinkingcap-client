# Upgrading from v3 to v4

## Requirements

| Dependency | v3 | v4 |
|---|---|---|
| PHP | `^8.1` | `^8.3` |
| Symfony | `^5.4 \|\| ^6.3 \|\| ^7.0` | `^7.0 \|\| ^8.0` |
| phpro/soap-client | `^3.0` | `^4.0` |
| PHPUnit (dev) | `^9.5` | `^11.0` |
| phpspec (dev) | `^7.2` | `^7.2 \|\| ^8.0` |

## Breaking changes

### 1. SOAP engine replaced

The underlying SOAP engine changed from `ext-soap` (PHP's native SOAP extension) to `soap/encoding` (a pure PHP implementation). This affects how SOAP responses are deserialized:

- **v3**: Used `SoapClient::__doRequest()` with PHP's native type coercion. Non-nullable properties could silently receive `null` values.
- **v4**: Uses reflection-based property assignment. Properties must be nullable if the SOAP response can contain `null`.

If you built your own client factory (bypassing `CourseClientFactory` / `LearnerClientFactory`), update it:

```php
// v3
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;

$engine = DefaultEngineFactory::create(
    ExtSoapOptions::defaults($wsdlUrl, [])
        ->withClassMap(LearnerManagementClassmap::getCollection())
);

// v4
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Phpro\SoapClient\Soap\EngineOptions;
use Soap\Encoding\EncoderRegistry;

$engine = DefaultEngineFactory::create(
    EngineOptions::defaults($wsdlUrl)
        ->withEncoderRegistry(
            EncoderRegistry::default()
                ->addClassMapCollection(LearnerManagementClassmap::types())
                ->addBackedEnumClassMapCollection(LearnerManagementClassmap::enums())
        )
);
```

### 2. Classmap API changed

The classmap classes now expose `types()` and `enums()` static methods instead of `getCollection()`:

```php
// v3
LearnerManagementClassmap::getCollection()  // returns Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection

// v4
LearnerManagementClassmap::types()  // returns Soap\Encoding\ClassMap\ClassMapCollection
LearnerManagementClassmap::enums()  // returns Soap\Encoding\ClassMap\ClassMapCollection
```

### 3. `ServiceResultOf*::getResult()` return types are now nullable

All `ServiceResultOf*` types now correctly declare their `Result` property and `getResult()` return type as nullable. This matches the WSDL schema — the SOAP API returns `null` when operations fail.

```php
// v3
public function getResult(): ServiceUser   // non-nullable (but could silently be null at runtime)

// v4
public function getResult(): ?ServiceUser  // nullable (type-safe)
```

**Action required**: If your code calls `->getResult()` without checking `->getSuccess()` first, add a null check:

```php
$result = $response->getGetUserByEmailResult();
if (!$result->getSuccess()) {
    throw new \RuntimeException($result->getMessage() ?? 'SOAP call failed');
}
// Safe to access getResult() after success check
$user = $result->getResult();
```

### 4. WSDL method descriptions removed from client docblocks

The v3 generated client had WSDL documentation strings as docblock descriptions on each method (e.g., `"Returns a list of all the users registered in the API key domain."`). These are missing in v4 due to an upstream bug in `phpro/soap-client` v4 where `ReplaceMethodTypesManipulator` drops `MethodMeta` when rebuilding `Method` objects. The `@param`, `@return`, and `@throws` tags are still present.

The WSDL descriptions are still available in the WSDL files themselves for reference.

### 5. All generated types regenerated

All type classes, client classes, and classmaps were regenerated with the v4 code generator. Most method/property names are unchanged, with these WSDL-driven exceptions:

- `TrainingLocation::getGoToWebcast()` → `getGoTo_Webcast()` (both CourseManagement and LearnerManagement)
- `Course::getRecordScore()` → `getCompleteSessionWhenMarkedByLearner()` (both CourseManagement and LearnerManagement)

Other notable changes:

- `declare(strict_types=1)` is present on all files (enforced by ECS)
- Some internal type names in classmaps use disambiguated names (e.g., `LearningTypeCaptionInfo` in the classmap vs `CaptionInfo` in property types)
- Docblocks were added to all getters/setters
- WSDL updated with latest ThinkingCap schema (new endpoints: `GetLearningActivityStudentRecordsFiltered`, `GetCompletedStudentRecordsWithPreset`)

### 6. Custom assembler `withNillable()` semantics fixed

The custom assembler options (`PropertyAssemblerOptions`, `GetterAssemblerOptions`, `ImmutableSetterAssemblerOptions`) had a bug where `->withNillable()` (called without arguments) would set nillable to `false` due to the default parameter value. This has been fixed — `->withNillable()` now correctly preserves nullable types.

If you extended these custom assemblers and relied on `->withNillable()` stripping nullable types, update your code to use `->withNillable(false)` explicitly.

## Testing

Tests no longer require a live ThinkingCap connection. SOAP responses are served from fixture files via `FixtureTransport`. To re-record fixtures from the live API:

```php
use Lingoda\ThinkingcapBundle\Tests\Transport\RecordingTransport;
use Soap\Psr18Transport\Psr18Transport;

$recording = new RecordingTransport(
    Psr18Transport::createWithDefaultClient(),
    __DIR__ . '/tests/fixtures/soap'
);
// Use $recording as the transport in EngineOptions::defaults($wsdl)->withTransport($recording)
```
