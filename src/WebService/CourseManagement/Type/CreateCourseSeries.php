<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateCourseSeries implements RequestInterface
{
    private ?string $apiKey = null;

    private ?string $programID = null;

    private ?string $code = null;

    private ?string $name = null;

    private ?string $description = null;

    private ?string $tags = null;

    private bool $denyInheritance;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $programID, ?string $code, ?string $name, ?string $description, ?string $tags, bool $denyInheritance)
    {
        $this->apiKey = $apiKey;
        $this->programID = $programID;
        $this->code = $code;
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
        $this->denyInheritance = $denyInheritance;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    public function getProgramID(): ?string
    {
        return $this->programID;
    }

    public function withProgramID(?string $programID): static
    {
        $new = clone $this;
        $new->programID = $programID;

        return $new;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function withCode(?string $code): static
    {
        $new = clone $this;
        $new->code = $code;

        return $new;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): static
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function withTags(?string $tags): static
    {
        $new = clone $this;
        $new->tags = $tags;

        return $new;
    }

    public function getDenyInheritance(): bool
    {
        return $this->denyInheritance;
    }

    public function withDenyInheritance(bool $denyInheritance): static
    {
        $new = clone $this;
        $new->denyInheritance = $denyInheritance;

        return $new;
    }
}
