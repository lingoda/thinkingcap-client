<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceResultOfXmlDocument
{
    private Result $Result;

    
    private bool $Success;

    
    private string $Message;

    
    public function getResult(): Result
    {
        return $this->Result;
    }

    
    public function withResult(Result $Result): static
    {
        $new = clone $this;
        $new->Result = $Result;

        return $new;
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

    
    public function getMessage(): string
    {
        return $this->Message;
    }

    
    public function withMessage(string $Message): static
    {
        $new = clone $this;
        $new->Message = $Message;

        return $new;
    }
}
