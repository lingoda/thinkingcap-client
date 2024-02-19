<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AddLearningActivityResponse implements ResultInterface
{
    private ServiceResultOfString $AddLearningActivityResult;

    
    public function getAddLearningActivityResult(): ServiceResultOfString
    {
        return $this->AddLearningActivityResult;
    }

    
    public function withAddLearningActivityResult(ServiceResultOfString $AddLearningActivityResult): static
    {
        $new = clone $this;
        $new->AddLearningActivityResult = $AddLearningActivityResult;

        return $new;
    }
}
