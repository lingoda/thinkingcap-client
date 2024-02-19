<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateStudentSupervisorsResponse implements ResultInterface
{
    private ServiceResultOfString $UpdateStudentSupervisorsResult;

    
    public function getUpdateStudentSupervisorsResult(): ServiceResultOfString
    {
        return $this->UpdateStudentSupervisorsResult;
    }

    
    public function withUpdateStudentSupervisorsResult(ServiceResultOfString $UpdateStudentSupervisorsResult): static
    {
        $new = clone $this;
        $new->UpdateStudentSupervisorsResult = $UpdateStudentSupervisorsResult;

        return $new;
    }
}
