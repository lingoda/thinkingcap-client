<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetCourseAssignmentsXml implements RequestInterface
{
    private ?string $apiKey = null;

    private ?string $user = null;

    private ?string $courseID = null;

    /**
     * Constructor
     *
     */
    public function __construct(?string $apiKey, ?string $user, ?string $courseID)
    {
        $this->apiKey = $apiKey;
        $this->user = $user;
        $this->courseID = $courseID;
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

    public function getUser(): ?string
    {
        return $this->user;
    }

    public function withUser(?string $user): static
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }

    public function getCourseID(): ?string
    {
        return $this->courseID;
    }

    public function withCourseID(?string $courseID): static
    {
        $new = clone $this;
        $new->courseID = $courseID;

        return $new;
    }
}
