<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class Domain
{
    /**
     * @var string
     */
    private $DomainID;

    /**
     * @var string
     */
    private $DomainName;

    /**
     * @var string
     */
    private $DomainCode;

    /**
     * @var string
     */
    private $ParentDomainID;

    /**
     * @var bool
     */
    private $MembershipPending;

    /**
     * @return string
     */
    public function getDomainID()
    {
        return $this->DomainID;
    }

    /**
     * @param string $DomainID
     *
     * @return Domain
     */
    public function withDomainID($DomainID)
    {
        $new = clone $this;
        $new->DomainID = $DomainID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomainName()
    {
        return $this->DomainName;
    }

    /**
     * @param string $DomainName
     *
     * @return Domain
     */
    public function withDomainName($DomainName)
    {
        $new = clone $this;
        $new->DomainName = $DomainName;

        return $new;
    }

    /**
     * @return string
     */
    public function getDomainCode()
    {
        return $this->DomainCode;
    }

    /**
     * @param string $DomainCode
     *
     * @return Domain
     */
    public function withDomainCode($DomainCode)
    {
        $new = clone $this;
        $new->DomainCode = $DomainCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getParentDomainID()
    {
        return $this->ParentDomainID;
    }

    /**
     * @param string $ParentDomainID
     *
     * @return Domain
     */
    public function withParentDomainID($ParentDomainID)
    {
        $new = clone $this;
        $new->ParentDomainID = $ParentDomainID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMembershipPending()
    {
        return $this->MembershipPending;
    }

    /**
     * @param bool $MembershipPending
     *
     * @return Domain
     */
    public function withMembershipPending($MembershipPending)
    {
        $new = clone $this;
        $new->MembershipPending = $MembershipPending;

        return $new;
    }
}
