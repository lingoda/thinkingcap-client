<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceResultOfString
{
    private ?string $Result = null;

    private bool $Success;

    private ?string $Message = null;

    public function getResult(): ?string
    {
        return $this->Result;
    }

    public function withResult(?string $Result): static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
    }

    public function ensureResult(): string
    {
        return $this->Result ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'Result');
    }

    public function getSuccess(): bool
    {
        return $this->Success;
    }

    public function withSuccess(bool $Success): static
    {
        $new = clone $this;
        $new->Success = $Success;

        return $new;
    }

    public function getMessage(): ?string
    {
        return $this->Message;
    }

    public function withMessage(?string $Message): static
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
