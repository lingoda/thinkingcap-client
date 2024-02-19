<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentWithDetailsResponse implements ResultInterface
{
    private ServiceResultOfString $EnrollStudentWithDetailsResult;

    
    public function getEnrollStudentWithDetailsResult(): ServiceResultOfString
    {
        return $this->EnrollStudentWithDetailsResult;
    }

    
    public function withEnrollStudentWithDetailsResult(ServiceResultOfString $EnrollStudentWithDetailsResult): static
    {
        $new = clone $this;
        $new->EnrollStudentWithDetailsResult = $EnrollStudentWithDetailsResult;

        return $new;
    }
}
