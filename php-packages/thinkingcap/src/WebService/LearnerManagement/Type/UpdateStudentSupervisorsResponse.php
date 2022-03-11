<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateStudentSupervisorsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $UpdateStudentSupervisorsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getUpdateStudentSupervisorsResult()
    {
        return $this->UpdateStudentSupervisorsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $UpdateStudentSupervisorsResult
     *
     * @return UpdateStudentSupervisorsResponse
     */
    public function withUpdateStudentSupervisorsResult($UpdateStudentSupervisorsResult)
    {
        $new = clone $this;
        $new->UpdateStudentSupervisorsResult = $UpdateStudentSupervisorsResult;

        return $new;
    }
}
