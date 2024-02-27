<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeLearningActivityActiveStatus implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $learningObjectID;

    
    private bool $active;

    
    private bool $updateAdminCatalogs;

    
    private bool $updateLearnerCatalogs;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $learningObjectID, bool $active, bool $updateAdminCatalogs, bool $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->learningObjectID = $learningObjectID;
        $this->active = $active;
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

    
    public function getLearningObjectID(): ?string
    {
        return $this->learningObjectID;
    }

    
    public function withLearningObjectID(?string $learningObjectID): static
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }

    
    public function getActive(): bool
    {
        return $this->active;
    }

    
    public function withActive(bool $active): static
    {
        $new = clone $this;
        $new->active = $active;

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
