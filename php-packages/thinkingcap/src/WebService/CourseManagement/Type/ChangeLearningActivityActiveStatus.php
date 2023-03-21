<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ChangeLearningActivityActiveStatus implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningObjectID;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool
     */
    private $updateAdminCatalogs;

    /**
     * @var bool
     */
    private $updateLearnerCatalogs;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $learningObjectID
     * @var bool $active
     * @var bool $updateAdminCatalogs
     * @var bool $updateLearnerCatalogs
     */
    public function __construct($apiKey, $learningObjectID, $active, $updateAdminCatalogs, $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->learningObjectID = $learningObjectID;
        $this->active = $active;
        $this->updateAdminCatalogs = $updateAdminCatalogs;
        $this->updateLearnerCatalogs = $updateLearnerCatalogs;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withApiKey($apiKey)
    {
        $new = clone $this;
        $new->apiKey = $apiKey;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningObjectID()
    {
        return $this->learningObjectID;
    }

    /**
     * @param string $learningObjectID
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withLearningObjectID($learningObjectID)
    {
        $new = clone $this;
        $new->learningObjectID = $learningObjectID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withActive($active)
    {
        $new = clone $this;
        $new->active = $active;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateAdminCatalogs()
    {
        return $this->updateAdminCatalogs;
    }

    /**
     * @param bool $updateAdminCatalogs
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withUpdateAdminCatalogs($updateAdminCatalogs)
    {
        $new = clone $this;
        $new->updateAdminCatalogs = $updateAdminCatalogs;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateLearnerCatalogs()
    {
        return $this->updateLearnerCatalogs;
    }

    /**
     * @param bool $updateLearnerCatalogs
     *
     * @return ChangeLearningActivityActiveStatus
     */
    public function withUpdateLearnerCatalogs($updateLearnerCatalogs)
    {
        $new = clone $this;
        $new->updateLearnerCatalogs = $updateLearnerCatalogs;

        return $new;
    }
}
