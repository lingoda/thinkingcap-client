<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\ResultInterface;

class EnrollStudentQueuedResponse implements ResultInterface
{
    private ?ServiceResultOfString $EnrollStudentQueuedResult;

    public function getEnrollStudentQueuedResult(): ?ServiceResultOfString
    {
        return $this->EnrollStudentQueuedResult;
    }

    public function withEnrollStudentQueuedResult(?ServiceResultOfString $EnrollStudentQueuedResult): static
    {
        $new = clone $this;
        $new->EnrollStudentQueuedResult = $EnrollStudentQueuedResult;

        return $new;
    }
}
