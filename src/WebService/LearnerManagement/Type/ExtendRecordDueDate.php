<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExtendRecordDueDate implements RequestInterface
{
    private ?string $apiKey = null;

    private ?string $studentRecordID = null;

    private ?string $newDueDateStr = null;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $studentRecordID, ?string $newDueDateStr)
    {
        $this->apiKey = $apiKey;
        $this->studentRecordID = $studentRecordID;
        $this->newDueDateStr = $newDueDateStr;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function withApiKey(?string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    public function getStudentRecordID(): ?string
    {
        return $this->studentRecordID;
    }

    public function withStudentRecordID(?string $studentRecordID): static
    {
        $new = clone $this;
        $new->studentRecordID = $studentRecordID;

        return $new;
    }

    public function getNewDueDateStr(): ?string
    {
        return $this->newDueDateStr;
    }

    public function withNewDueDateStr(?string $newDueDateStr): static
    {
        $new = clone $this;
        $new->newDueDateStr = $newDueDateStr;

        return $new;
    }
}
