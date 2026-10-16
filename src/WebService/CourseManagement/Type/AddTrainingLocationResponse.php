<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class AddTrainingLocationResponse
{
    private ?ServiceResultOfString $AddTrainingLocationResult = null;

    public function getAddTrainingLocationResult(): ?ServiceResultOfString
    {
        return $this->AddTrainingLocationResult;
    }

    public function withAddTrainingLocationResult(?ServiceResultOfString $AddTrainingLocationResult): static
    {
        $new = clone $this;
        $new->AddTrainingLocationResult = $AddTrainingLocationResult;

        return $new;
    }

    public function ensureAddTrainingLocationResult(): ServiceResultOfString
    {
        return $this->AddTrainingLocationResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'AddTrainingLocationResult');
    }
}
