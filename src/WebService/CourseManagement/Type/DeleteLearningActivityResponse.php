<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteLearningActivityResponse implements ResultInterface
{
    private ServiceResultOfString $DeleteLearningActivityResult;

    
    public function getDeleteLearningActivityResult(): ServiceResultOfString
    {
        return $this->DeleteLearningActivityResult;
    }

    
    public function withDeleteLearningActivityResult(ServiceResultOfString $DeleteLearningActivityResult): static
    {
        $new = clone $this;
        $new->DeleteLearningActivityResult = $DeleteLearningActivityResult;

        return $new;
    }
}
