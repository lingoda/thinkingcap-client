<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLearningActivitiesStudentRecordsWithPreset implements RequestInterface
{
    private ?string $apiKey = null;

    private int $maxDaysToReport;

    private bool $includeMetadata;

    private ?string $includedMetadataFields = null;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, int $maxDaysToReport, bool $includeMetadata, ?string $includedMetadataFields)
    {
        $this->apiKey = $apiKey;
        $this->maxDaysToReport = $maxDaysToReport;
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

    public function getMaxDaysToReport(): int
    {
        return $this->maxDaysToReport;
    }

    public function withMaxDaysToReport(int $maxDaysToReport): static
    {
        $new = clone $this;
        $new->maxDaysToReport = $maxDaysToReport;

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
