<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateUserProfile implements RequestInterface
{
    private ?string $apiKey;

    
    private ?string $userID;

    
    private ?string $biography;

    
    private ?string $contentType;

    /**
     * @var null | mixed
     */
    private mixed $photo;

    /**
     * Constructor
     *
     * @param null | mixed $photo
     */
    public function __construct(?string $apiKey, ?string $userID, ?string $biography, ?string $contentType, mixed $photo)
    {
        $this->apiKey = $apiKey;
        $this->userID = $userID;
        $this->biography = $biography;
        $this->contentType = $contentType;
        $this->photo = $photo;
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

    
    public function getUserID(): ?string
    {
        return $this->userID;
    }

    
    public function withUserID(?string $userID): static
    {
        $new = clone $this;
        $new->userID = $userID;

        return $new;
    }

    
    public function getBiography(): ?string
    {
        return $this->biography;
    }

    
    public function withBiography(?string $biography): static
    {
        $new = clone $this;
        $new->biography = $biography;

        return $new;
    }

    
    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    
    public function withContentType(?string $contentType): static
    {
        $new = clone $this;
        $new->contentType = $contentType;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getPhoto(): mixed
    {
        return $this->photo;
    }

    /**
     * @param null | mixed $photo
     */
    public function withPhoto(mixed $photo): static
    {
        $new = clone $this;
        $new->photo = $photo;

        return $new;
    }
}
