<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentResponse implements ResultInterface
{
    private ServiceResultOfString $EnrollStudentResult;

    
    public function getEnrollStudentResult(): ServiceResultOfString
    {
        return $this->EnrollStudentResult;
    }

    
    public function withEnrollStudentResult(ServiceResultOfString $EnrollStudentResult): static
    {
        $new = clone $this;
        $new->EnrollStudentResult = $EnrollStudentResult;

        return $new;
    }
}
