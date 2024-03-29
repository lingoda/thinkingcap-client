<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class ServiceResultOfListOfLearningActivityRecord
{
    protected string $Message = '';
    private ArrayOfLearningActivityRecord $Result;

    
    private bool $Success;

    public function getResult(): ArrayOfLearningActivityRecord
    {
        return $this->Result;
    }

    public function withResult(ArrayOfLearningActivityRecord $Result): static
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
