# Usage

1- Add thinkingcap api key and wsdl urls to `.env.local`

```
LINGODA__THINKINGCAP_API_KEY_NURSING=
LINGODA__THINKINGCAP_API_KEY_MIDWIFERY=
LINGODA__THINKINGCAP_API_KEY_DOCTORS=
LINGODA__THINKINGCAP_API_KEY_ROOT=
LINGODA__THINKINGCAP_WSDL_URL_COURSE_MANAGEMENT='https://www.lingoda.care/WebService/CourseManagement.asmx?WSDL'
LINGODA__THINKINGCAP_WSDL_URL_LEARNER_MANAGEMENT='https://www.lingoda.care/WebService/LearnerManagement.asmx?WSDL'
```

2- Based on the usage, inject one of the following services:

-   To call the CourseManagement methods: `Lingoda\ThinkingcapBundle\WebService\CourseManagement\CourseManagementSoapClient`
-   To call the LearnerManagement methods: `Lingoda\ThinkingcapBundle\WebService\LearnerManagement\LearnerManagementSoapClient`

```
public function __construct(LearnerManagementSoapClient $client)
{
    $this->client = $client;
}
```

3- Create a type instance by `RequestFactory` based on the method you are going to call and specify the intended domain.

-   Find the related type for LearnerManagement from `Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type`
-   Find the related type for CourseManagement from `Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type`

For example to call the `getUserByEmail` method from LearnerManagement:

```
use Lingoda\ThinkingcapBundle\Client\RequestFactory;
use Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\GetUserByEmail;
.
.
$getUserByEmailType = RequestFactory::create(
    $domain
    GetUserByEmail::class,
    'testEmail@lingoda.com'
);
```

**Note:** API key will be injected automatically based on the domain.

4- Call the intended method by sending the created type as its argument:

```
$response = $client->getUserByEmail($getUserByEmailType);
```

5- Use `$response` to access the api calling result, or check if the call was successful or not:

```
$response->getGetUserByEmailResult()->getSuccess()
```
