<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DeleteLearningActivity implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningActivityID;

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
     * @var string $learningActivityID
     * @var bool $updateAdminCatalogs
     * @var bool $updateLearnerCatalogs
     */
    public function __construct($apiKey, $learningActivityID, $updateAdminCatalogs, $updateLearnerCatalogs)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityID = $learningActivityID;
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
     * @return DeleteLearningActivity
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
    public function getLearningActivityID()
    {
        return $this->learningActivityID;
    }

    /**
     * @param string $learningActivityID
     *
     * @return DeleteLearningActivity
     */
    public function withLearningActivityID($learningActivityID)
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

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
     * @return DeleteLearningActivity
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
     * @return DeleteLearningActivity
     */
    public function withUpdateLearnerCatalogs($updateLearnerCatalogs)
    {
        $new = clone $this;
        $new->updateLearnerCatalogs = $updateLearnerCatalogs;

        return $new;
    }
}
