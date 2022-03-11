<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetStudentLPDetailsResponse implements ResultInterface
{
    /**
     * @var \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    private $GetStudentLPDetailsResult;

    /**
     * @return \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString
     */
    public function getGetStudentLPDetailsResult()
    {
        return $this->GetStudentLPDetailsResult;
    }

    /**
     * @param \Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type\ServiceResultOfString $GetStudentLPDetailsResult
     *
     * @return GetStudentLPDetailsResponse
     */
    public function withGetStudentLPDetailsResult($GetStudentLPDetailsResult)
    {
        $new = clone $this;
        $new->GetStudentLPDetailsResult = $GetStudentLPDetailsResult;

        return $new;
    }
}
