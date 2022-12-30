<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddLearningActivity implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $learningActivityDomainID;

    /**
     * @var string
     */
    private $learningActivityType;

    /**
     * @var string
     */
    private $learningActivityID;

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
     * @var string $apiKey
     * @var string $learningActivityDomainID
     * @var string $learningActivityType
     * @var string $learningActivityID
     * @var string $learningActivityTitle
     * @var string $learningActivityCode
     * @var string $learningActivityDescription
     * @var string $learningActivityLanguage
     * @var string $learningActivityEquivalencyCode
     * @var string $learningActivityTags
     * @var float $learningActivityEstimatedTimeMinutes
     * @var bool $learningActivityShowSupervisorLogin
     * @var bool $learningActivityRequiresEvidence
     * @var string $learningActivityCertificateTemplateName
     * @var int $learningActivityCertificateMinScore
     * @var string $learningActivityCustomMetadata
     */
    public function __construct($apiKey, $learningActivityDomainID, $learningActivityType, $learningActivityID, $learningActivityTitle, $learningActivityCode, $learningActivityDescription, $learningActivityLanguage, $learningActivityEquivalencyCode, $learningActivityTags, $learningActivityEstimatedTimeMinutes, $learningActivityShowSupervisorLogin, $learningActivityRequiresEvidence, $learningActivityCertificateTemplateName, $learningActivityCertificateMinScore, $learningActivityCustomMetadata)
    {
        $this->apiKey = $apiKey;
        $this->learningActivityDomainID = $learningActivityDomainID;
        $this->learningActivityType = $learningActivityType;
        $this->learningActivityID = $learningActivityID;
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
     * @return AddLearningActivity
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
    public function getLearningActivityDomainID()
    {
        return $this->learningActivityDomainID;
    }

    /**
     * @param string $learningActivityDomainID
     *
     * @return AddLearningActivity
     */
    public function withLearningActivityDomainID($learningActivityDomainID)
    {
        $new = clone $this;
        $new->learningActivityDomainID = $learningActivityDomainID;

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
     * @return AddLearningActivity
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
    public function getLearningActivityID()
    {
        return $this->learningActivityID;
    }

    /**
     * @param string $learningActivityID
     *
     * @return AddLearningActivity
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
    public function getLearningActivityTitle()
    {
        return $this->learningActivityTitle;
    }

    /**
     * @param string $learningActivityTitle
     *
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
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
     * @return AddLearningActivity
     */
    public function withLearningActivityCustomMetadata($learningActivityCustomMetadata)
    {
        $new = clone $this;
        $new->learningActivityCustomMetadata = $learningActivityCustomMetadata;

        return $new;
    }
}
