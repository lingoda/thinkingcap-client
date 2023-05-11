<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AddTrainingLocationWithTimeZone implements RequestInterface
{
    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $room;

    /**
     * @var string
     */
    private $timezoneCode;

    /**
     * @var string
     */
    private $useDST;

    /**
     * Constructor
     *
     * @var string $apiKey
     * @var string $country
     * @var string $state
     * @var string $city
     * @var string $address
     * @var string $postalCode
     * @var string $room
     * @var string $timezoneCode
     * @var string $useDST
     */
    public function __construct($apiKey, $country, $state, $city, $address, $postalCode, $room, $timezoneCode, $useDST)
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
     * @return AddTrainingLocationWithTimeZone
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withState($state)
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withPostalCode($postalCode)
    {
        $new = clone $this;
        $new->postalCode = $postalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * @param string $room
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withRoom($room)
    {
        $new = clone $this;
        $new->room = $room;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimezoneCode()
    {
        return $this->timezoneCode;
    }

    /**
     * @param string $timezoneCode
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withTimezoneCode($timezoneCode)
    {
        $new = clone $this;
        $new->timezoneCode = $timezoneCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getUseDST()
    {
        return $this->useDST;
    }

    /**
     * @param string $useDST
     *
     * @return AddTrainingLocationWithTimeZone
     */
    public function withUseDST($useDST)
    {
        $new = clone $this;
        $new->useDST = $useDST;

        return $new;
    }
}
