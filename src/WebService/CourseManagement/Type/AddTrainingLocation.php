<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class AddTrainingLocation
{
    private ?string $apiKey;

    
    private ?string $country;

    
    private ?string $state;

    
    private ?string $city;

    
    private ?string $address;

    
    private ?string $postalCode;

    
    private ?string $room;

    
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

    
    public function getCountry(): ?string
    {
        return $this->country;
    }

    
    public function withCountry(?string $country): static
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    
    public function getState(): ?string
    {
        return $this->state;
    }

    
    public function withState(?string $state): static
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    
    public function getCity(): ?string
    {
        return $this->city;
    }

    
    public function withCity(?string $city): static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    
    public function getAddress(): ?string
    {
        return $this->address;
    }

    
    public function withAddress(?string $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    
    public function withPostalCode(?string $postalCode): static
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

        return $new;
    }

    
    public function getRoom(): ?string
    {
        return $this->room;
    }

    
    public function withRoom(?string $room): static
    {
        $new = clone $this;
        $new->room = $room;

        return $new;
    }
}
