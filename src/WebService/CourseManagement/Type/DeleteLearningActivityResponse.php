<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class DeleteLearningActivityResponse implements ResultInterface
{
    private ?ServiceResultOfString $DeleteLearningActivityResult = null;

    public function getDeleteLearningActivityResult(): ?ServiceResultOfString
    {
        return $this->DeleteLearningActivityResult;
    }

    public function withDeleteLearningActivityResult(?ServiceResultOfString $DeleteLearningActivityResult): static
    {
        $new = clone $this;
        $new->DeleteLearningActivityResult = $DeleteLearningActivityResult;

        return $new;
    }

    public function ensureDeleteLearningActivityResult(): ServiceResultOfString
    {
        return $this->DeleteLearningActivityResult ?? throw \Lingoda\ThinkingcapBundle\Exception\MissingFieldException::create(self::class, 'DeleteLearningActivityResult');
    }
}
