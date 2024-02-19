<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddTrainingLocationWithTimeZoneResponse implements ResultInterface
{
    private ServiceResultOfString $AddTrainingLocationWithTimeZoneResult;

    public function getAddTrainingLocationWithTimeZoneResult(): ServiceResultOfString
    {
        return $this->AddTrainingLocationWithTimeZoneResult;
    }

    public function withAddTrainingLocationWithTimeZoneResult(ServiceResultOfString $AddTrainingLocationWithTimeZoneResult): static
    {
        $new = clone $this;
        $new->AddTrainingLocationWithTimeZoneResult = $AddTrainingLocationWithTimeZoneResult;

        return $new;
    }
}
