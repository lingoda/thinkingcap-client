<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class AddTrainingLocation
{
    private ?string $apiKey = null;

    private ?string $country = null;

    private ?string $state = null;

    private ?string $city = null;

    private ?string $address = null;

    private ?string $postalCode = null;

    private ?string $room = null;

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
