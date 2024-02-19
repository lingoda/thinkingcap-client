<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class StudentSelfEnrollResponse implements ResultInterface
{
    private ServiceResultOfString $StudentSelfEnrollResult;

    
    public function getStudentSelfEnrollResult(): ServiceResultOfString
    {
        return $this->StudentSelfEnrollResult;
    }

    
    public function withStudentSelfEnrollResult(ServiceResultOfString $StudentSelfEnrollResult): static
    {
        $new = clone $this;
        $new->StudentSelfEnrollResult = $StudentSelfEnrollResult;

        return $new;
    }
}
