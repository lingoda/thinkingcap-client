<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteLearningActivity implements RequestInterface
{
    private string $apiKey;

    
    private string $learningActivityID;

    
    private bool $updateAdminCatalogs;

    
    private bool $updateLearnerCatalogs;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $learningActivityID, bool $updateAdminCatalogs, bool $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
        $this->updateAdminCatalogs = $updateAdminCatalogs;
        $this->updateLearnerCatalogs = $updateLearnerCatalogs;
    }

    
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    
    public function withApiKey(string $apiKey): static
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    
    public function getLearningActivityID(): string
    {
        return $this->learningActivityID;
    }

    
    public function withLearningActivityID(string $learningActivityID): static
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

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
