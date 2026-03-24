<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivityStudentRecordsFiltered implements RequestInterface
{
    private ?string $apiKey = null;

    private ?string $learningActivityID = null;

    private ?string $recordStatus = null;

    private bool $includeMetadata;

    private ?string $includedMetadataFields = null;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $learningActivityID, ?string $recordStatus, bool $includeMetadata, ?string $includedMetadataFields)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
        $this->recordStatus = $recordStatus;
        $this->includeMetadata = $includeMetadata;
        $this->includedMetadataFields = $includedMetadataFields;
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

    public function getLearningActivityID(): ?string
    {
        return $this->learningActivityID;
    }

    public function withLearningActivityID(?string $learningActivityID): static
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    public function getRecordStatus(): ?string
    {
        return $this->recordStatus;
    }

    public function withRecordStatus(?string $recordStatus): static
    {
        $new = clone $this;
        $new->recordStatus = $recordStatus;

        return $new;
    }

    public function getIncludeMetadata(): bool
    {
        return $this->includeMetadata;
    }

    public function withIncludeMetadata(bool $includeMetadata): static
    {
        $new = clone $this;
        $new->includeMetadata = $includeMetadata;

        return $new;
    }

    public function getIncludedMetadataFields(): ?string
    {
        return $this->includedMetadataFields;
    }

    public function withIncludedMetadataFields(?string $includedMetadataFields): static
    {
        $new = clone $this;
        $new->includedMetadataFields = $includedMetadataFields;

        return $new;
    }
}
