<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateLearningActivity implements RequestInterface
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
     * @var string
     */
    private $learningActivityType;

    /**
     * @var string
     */
    private $learningActivityTitle;

    /**
     * @var string
     */
    private $learningActivityCode;

    /**
     * @var string
     */
    private $learningActivityDescription;

    /**
     * @var string
     */
    private $learningActivityLanguage;

    /**
     * @var string
     */
    private $learningActivityEquivalencyCode;

    /**
     * @var string
     */
    private $learningActivityTags;

    /**
     * @var float
     */
    private $learningActivityEstimatedTimeMinutes;

    /**
     * @var bool
     */
    private $learningActivityShowSupervisorLogin;

    /**
     * @var bool
     */
    private $learningActivityRequiresEvidence;

    /**
     * @var string
     */
    private $learningActivityCertificateTemplateName;

    /**
     * @var int
     */
    private $learningActivityCertificateMinScore;

    /**
     * @var string
     */
    private $learningActivityCustomMetadata;

    /**
     * Constructor
     *
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var string
     * @var float
     * @var bool
     * @var bool
     * @var string
     * @var int
     * @var string
     */
    public function __construct($apiKey, $learningActivityID, $learningActivityType, $learningActivityTitle, $learningActivityCode, $learningActivityDescription, $learningActivityLanguage, $learningActivityEquivalencyCode, $learningActivityTags, $learningActivityEstimatedTimeMinutes, $learningActivityShowSupervisorLogin, $learningActivityRequiresEvidence, $learningActivityCertificateTemplateName, $learningActivityCertificateMinScore, $learningActivityCustomMetadata)
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
     * @return UpdateLearningActivity
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
     * @return UpdateLearningActivity
     */
    public function withLearningActivityID($learningActivityID)
    {
        $new = clone $this;
        $new->learningActivityID = $learningActivityID;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityType()
    {
        return $this->learningActivityType;
    }

    /**
     * @param string $learningActivityType
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityType($learningActivityType)
    {
        $new = clone $this;
        $new->learningActivityType = $learningActivityType;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityTitle()
    {
        return $this->learningActivityTitle;
    }

    /**
     * @param string $learningActivityTitle
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityTitle($learningActivityTitle)
    {
        $new = clone $this;
        $new->learningActivityTitle = $learningActivityTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityCode()
    {
        return $this->learningActivityCode;
    }

    /**
     * @param string $learningActivityCode
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityCode($learningActivityCode)
    {
        $new = clone $this;
        $new->learningActivityCode = $learningActivityCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityDescription()
    {
        return $this->learningActivityDescription;
    }

    /**
     * @param string $learningActivityDescription
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityDescription($learningActivityDescription)
    {
        $new = clone $this;
        $new->learningActivityDescription = $learningActivityDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityLanguage()
    {
        return $this->learningActivityLanguage;
    }

    /**
     * @param string $learningActivityLanguage
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityLanguage($learningActivityLanguage)
    {
        $new = clone $this;
        $new->learningActivityLanguage = $learningActivityLanguage;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityEquivalencyCode()
    {
        return $this->learningActivityEquivalencyCode;
    }

    /**
     * @param string $learningActivityEquivalencyCode
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityEquivalencyCode($learningActivityEquivalencyCode)
    {
        $new = clone $this;
        $new->learningActivityEquivalencyCode = $learningActivityEquivalencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityTags()
    {
        return $this->learningActivityTags;
    }

    /**
     * @param string $learningActivityTags
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityTags($learningActivityTags)
    {
        $new = clone $this;
        $new->learningActivityTags = $learningActivityTags;

        return $new;
    }

    /**
     * @return float
     */
    public function getLearningActivityEstimatedTimeMinutes()
    {
        return $this->learningActivityEstimatedTimeMinutes;
    }

    /**
     * @param float $learningActivityEstimatedTimeMinutes
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityEstimatedTimeMinutes($learningActivityEstimatedTimeMinutes)
    {
        $new = clone $this;
        $new->learningActivityEstimatedTimeMinutes = $learningActivityEstimatedTimeMinutes;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearningActivityShowSupervisorLogin()
    {
        return $this->learningActivityShowSupervisorLogin;
    }

    /**
     * @param bool $learningActivityShowSupervisorLogin
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityShowSupervisorLogin($learningActivityShowSupervisorLogin)
    {
        $new = clone $this;
        $new->learningActivityShowSupervisorLogin = $learningActivityShowSupervisorLogin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLearningActivityRequiresEvidence()
    {
        return $this->learningActivityRequiresEvidence;
    }

    /**
     * @param bool $learningActivityRequiresEvidence
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityRequiresEvidence($learningActivityRequiresEvidence)
    {
        $new = clone $this;
        $new->learningActivityRequiresEvidence = $learningActivityRequiresEvidence;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityCertificateTemplateName()
    {
        return $this->learningActivityCertificateTemplateName;
    }

    /**
     * @param string $learningActivityCertificateTemplateName
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityCertificateTemplateName($learningActivityCertificateTemplateName)
    {
        $new = clone $this;
        $new->learningActivityCertificateTemplateName = $learningActivityCertificateTemplateName;

        return $new;
    }

    /**
     * @return int
     */
    public function getLearningActivityCertificateMinScore()
    {
        return $this->learningActivityCertificateMinScore;
    }

    /**
     * @param int $learningActivityCertificateMinScore
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityCertificateMinScore($learningActivityCertificateMinScore)
    {
        $new = clone $this;
        $new->learningActivityCertificateMinScore = $learningActivityCertificateMinScore;

        return $new;
    }

    /**
     * @return string
     */
    public function getLearningActivityCustomMetadata()
    {
        return $this->learningActivityCustomMetadata;
    }

    /**
     * @param string $learningActivityCustomMetadata
     *
     * @return UpdateLearningActivity
     */
    public function withLearningActivityCustomMetadata($learningActivityCustomMetadata)
    {
        $new = clone $this;
        $new->learningActivityCustomMetadata = $learningActivityCustomMetadata;

        return $new;
    }
}
