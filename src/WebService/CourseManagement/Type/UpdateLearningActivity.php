<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateLearningActivity implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $learningActivityID;

    
    private ?string $learningActivityType;

    
    private ?string $learningActivityTitle;

    
    private ?string $learningActivityCode;

    
    private ?string $learningActivityDescription;

    
    private ?string $learningActivityLanguage;

    
    private ?string $learningActivityEquivalencyCode;

    
    private ?string $learningActivityTags;

    
    private float $learningActivityEstimatedTimeMinutes;

    
    private bool $learningActivityShowSupervisorLogin;

    
    private bool $learningActivityRequiresEvidence;

    
    private ?string $learningActivityCertificateTemplateName;

    
    private int $learningActivityCertificateMinScore;

    
    private ?string $learningActivityCustomMetadata;

    
    private bool $updateAdminCatalogs;

    
    private bool $updateLearnerCatalogs;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $learningActivityID, ?string $learningActivityType, ?string $learningActivityTitle, ?string $learningActivityCode, ?string $learningActivityDescription, ?string $learningActivityLanguage, ?string $learningActivityEquivalencyCode, ?string $learningActivityTags, float $learningActivityEstimatedTimeMinutes, bool $learningActivityShowSupervisorLogin, bool $learningActivityRequiresEvidence, ?string $learningActivityCertificateTemplateName, int $learningActivityCertificateMinScore, ?string $learningActivityCustomMetadata, bool $updateAdminCatalogs, bool $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
        $this->learningActivityType = $learningActivityType;
        $this->learningActivityTitle = $learningActivityTitle;
        $this->learningActivityCode = $learningActivityCode;
        $this->learningActivityDescription = $learningActivityDescription;
        $this->learningActivityLanguage = $learningActivityLanguage;
        $this->learningActivityEquivalencyCode = $learningActivityEquivalencyCode;
        $this->learningActivityTags = $learningActivityTags;
        $this->learningActivityEstimatedTimeMinutes = $learningActivityEstimatedTimeMinutes;
        $this->learningActivityShowSupervisorLogin = $learningActivityShowSupervisorLogin;
        $this->learningActivityRequiresEvidence = $learningActivityRequiresEvidence;
        $this->learningActivityCertificateTemplateName = $learningActivityCertificateTemplateName;
        $this->learningActivityCertificateMinScore = $learningActivityCertificateMinScore;
        $this->learningActivityCustomMetadata = $learningActivityCustomMetadata;
        $this->updateAdminCatalogs = $updateAdminCatalogs;
        $this->updateLearnerCatalogs = $updateLearnerCatalogs;
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

    
    public function getLearningActivityType(): ?string
    {
        return $this->learningActivityType;
    }

    
    public function withLearningActivityType(?string $learningActivityType): static
    {
        $new = clone $this;
        $new->learningActivityType = $learningActivityType;

        return $new;
    }

    
    public function getLearningActivityTitle(): ?string
    {
        return $this->learningActivityTitle;
    }

    
    public function withLearningActivityTitle(?string $learningActivityTitle): static
    {
        $new = clone $this;
        $new->learningActivityTitle = $learningActivityTitle;

        return $new;
    }

    
    public function getLearningActivityCode(): ?string
    {
        return $this->learningActivityCode;
    }

    
    public function withLearningActivityCode(?string $learningActivityCode): static
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    
    public function getLearningActivityDescription(): ?string
    {
        return $this->learningActivityDescription;
    }

    
    public function withLearningActivityDescription(?string $learningActivityDescription): static
    {
        $new = clone $this;
        $new->learningActivityDescription = $learningActivityDescription;

        return $new;
    }

    
    public function getLearningActivityLanguage(): ?string
    {
        return $this->learningActivityLanguage;
    }

    
    public function withLearningActivityLanguage(?string $learningActivityLanguage): static
    {
        $new = clone $this;
        $new->learningActivityLanguage = $learningActivityLanguage;

        return $new;
    }

    
    public function getLearningActivityEquivalencyCode(): ?string
    {
        return $this->learningActivityEquivalencyCode;
    }

    
    public function withLearningActivityEquivalencyCode(?string $learningActivityEquivalencyCode): static
    {
        $new = clone $this;
        $new->learningActivityEquivalencyCode = $learningActivityEquivalencyCode;

        return $new;
    }

    
    public function getLearningActivityTags(): ?string
    {
        return $this->learningActivityTags;
    }

    
    public function withLearningActivityTags(?string $learningActivityTags): static
    {
        $new = clone $this;
        $new->learningActivityTags = $learningActivityTags;

        return $new;
    }

    
    public function getLearningActivityEstimatedTimeMinutes(): float
    {
        return $this->learningActivityEstimatedTimeMinutes;
    }

    
    public function withLearningActivityEstimatedTimeMinutes(float $learningActivityEstimatedTimeMinutes): static
    {
        $new = clone $this;
        $new->learningActivityEstimatedTimeMinutes = $learningActivityEstimatedTimeMinutes;

        return $new;
    }

    
    public function getLearningActivityShowSupervisorLogin(): bool
    {
        return $this->learningActivityShowSupervisorLogin;
    }

    
    public function withLearningActivityShowSupervisorLogin(bool $learningActivityShowSupervisorLogin): static
    {
        $new = clone $this;
        $new->learningActivityShowSupervisorLogin = $learningActivityShowSupervisorLogin;

        return $new;
    }

    
    public function getLearningActivityRequiresEvidence(): bool
    {
        return $this->learningActivityRequiresEvidence;
    }

    
    public function withLearningActivityRequiresEvidence(bool $learningActivityRequiresEvidence): static
    {
        $new = clone $this;
        $new->learningActivityRequiresEvidence = $learningActivityRequiresEvidence;

        return $new;
    }

    
    public function getLearningActivityCertificateTemplateName(): ?string
    {
        return $this->learningActivityCertificateTemplateName;
    }

    
    public function withLearningActivityCertificateTemplateName(?string $learningActivityCertificateTemplateName): static
    {
        $new = clone $this;
        $new->learningActivityCertificateTemplateName = $learningActivityCertificateTemplateName;

        return $new;
    }

    
    public function getLearningActivityCertificateMinScore(): int
    {
        return $this->learningActivityCertificateMinScore;
    }

    
    public function withLearningActivityCertificateMinScore(int $learningActivityCertificateMinScore): static
    {
        $new = clone $this;
        $new->learningActivityCertificateMinScore = $learningActivityCertificateMinScore;

        return $new;
    }

    
    public function getLearningActivityCustomMetadata(): ?string
    {
        return $this->learningActivityCustomMetadata;
    }

    
    public function withLearningActivityCustomMetadata(?string $learningActivityCustomMetadata): static
    {
        $new = clone $this;
        $new->learningActivityCustomMetadata = $learningActivityCustomMetadata;

        return $new;
    }

    
    public function getUpdateAdminCatalogs(): bool
    {
        return $this->updateAdminCatalogs;
    }

    
    public function withUpdateAdminCatalogs(bool $updateAdminCatalogs): static
    {
        $new = clone $this;
        $new->updateAdminCatalogs = $updateAdminCatalogs;

        return $new;
    }

    
    public function getUpdateLearnerCatalogs(): bool
    {
        return $this->updateLearnerCatalogs;
    }

    
    public function withUpdateLearnerCatalogs(bool $updateLearnerCatalogs): static
    {
        $new = clone $this;
        $new->updateLearnerCatalogs = $updateLearnerCatalogs;

        return $new;
    }
}
