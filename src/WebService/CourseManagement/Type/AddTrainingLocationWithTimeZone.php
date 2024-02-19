<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddTrainingLocationWithTimeZone implements RequestInterface
{
    private string $apiKey;

    
    private string $country;

    
    private string $state;

    
    private string $city;

    
    private string $address;

    
    private string $postalCode;

    
    private string $room;

    
    private string $timezoneCode;

    
    private string $useDST;

    /**
     * Constructor
     *
     */
    public function __construct(string $apiKey, string $country, string $state, string $city, string $address, string $postalCode, string $room, string $timezoneCode, string $useDST)
    {
        $this->apiKey = $apiKey;
        $this->country = $country;
        $this->state = $state;
        $this->city = $city;
        $this->address = $address;
        $this->postalCode = $postalCode;
        $this->room = $room;
        $this->timezoneCode = $timezoneCode;
        $this->useDST = $useDST;
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

    
    public function getCountry(): string
    {
        return $this->country;
    }

    
    public function withCountry(string $country): static
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    
    public function getState(): string
    {
        return $this->state;
    }

    
    public function withState(string $state): static
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    
    public function getCity(): string
    {
        return $this->city;
    }

    
    public function withCity(string $city): static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    
    public function getAddress(): string
    {
        return $this->address;
    }

    
    public function withAddress(string $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    
    public function withPostalCode(string $postalCode): static
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

        return $new;
    }

    
    public function getRoom(): string
    {
        return $this->room;
    }

    
    public function withRoom(string $room): static
    {
        $new = clone $this;
        $new->room = $room;

        return $new;
    }

    
    public function getTimezoneCode(): string
    {
        return $this->timezoneCode;
    }

    
    public function withTimezoneCode(string $timezoneCode): static
    {
        $new = clone $this;
        $new->timezoneCode = $timezoneCode;

        return $new;
    }

    
    public function getUseDST(): string
    {
        return $this->useDST;
    }

    
    public function withUseDST(string $useDST): static
    {
        $new = clone $this;
        $new->useDST = $useDST;

        return $new;
    }
}
