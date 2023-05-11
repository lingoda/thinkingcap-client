<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class StudentSelfEnrollResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $StudentSelfEnrollResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getStudentSelfEnrollResult()
    {
        return $this->StudentSelfEnrollResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $StudentSelfEnrollResult
     *
     * @return StudentSelfEnrollResponse
     */
    public function withStudentSelfEnrollResult($StudentSelfEnrollResult)
    {
        $new = clone $this;
        $new->StudentSelfEnrollResult = $StudentSelfEnrollResult;

        return $new;
    }
}
