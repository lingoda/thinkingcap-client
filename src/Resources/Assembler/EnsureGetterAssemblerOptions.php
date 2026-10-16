<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

/**
 * Selects which nullable properties get an ensure<Field>() getter. Nothing is selected by default.
 */
final class EnsureGetterAssemblerOptions
{
    private bool $responseWrappers = false;
    private bool $serviceResults = false;

    /**
     * @var array<string, list<string>> type name => property names
     */
    private array $properties = [];

    public static function create(): self
    {
        return new self();
    }

    /**
     * <Operation>Response::<Operation>Result, e.g. GetUserByEmailResponse::GetUserByEmailResult.
     */
    public function forResponseWrappers(bool $responseWrappers = true): self
    {
        $new = clone $this;
        $new->responseWrappers = $responseWrappers;

        return $new;
    }

    /**
     * ServiceResultOf*::Result, the payload of a successful call.
     */
    public function forServiceResults(bool $serviceResults = true): self
    {
        $new = clone $this;
        $new->serviceResults = $serviceResults;

        return $new;
    }

    /**
     * @param array<string, list<string>> $properties type name => property names, e.g. ['LearningActivity' => ['ID']]
     */
    public function forProperties(array $properties): self
    {
        $new = clone $this;
        $new->properties = $properties;

        return $new;
    }

    public function matches(string $typeName, string $propertyName): bool
    {
        if ($this->responseWrappers && str_ends_with($typeName, 'Response') && str_ends_with($propertyName, 'Result')) {
            return true;
        }

        if ($this->serviceResults && str_starts_with($typeName, 'ServiceResultOf') && $propertyName === 'Result') {
            return true;
        }

        return \in_array($propertyName, $this->properties[$typeName] ?? [], true);
    }
}
