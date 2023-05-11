<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\WebService\CourseManagement\Type;

class CourseAlternativePrice
{
    /**
     * @var string
     */
    private $AlternativeID;

    /**
     * @var string
     */
    private $CourseID;

    /**
     * @var string
     */
    private $PriceTitle;

    /**
     * @var string
     */
    private $PriceOrder;

    /**
     * @var float
     */
    private $PriceValue;

    /**
     * @var string
     */
    private $PriceValueType;

    /**
     * @var string
     */
    private $PriceValueSign;

    /**
     * @var string
     */
    private $PriceConditionType;

    /**
     * @var string
     */
    private $PriceConditionValues;

    /**
     * @var string
     */
    private $PriceConditionName;

    /**
     * @var string
     */
    private $PriceConditionDetail;

    /**
     * @return string
     */
    public function getAlternativeID()
    {
        return $this->AlternativeID;
    }

    /**
     * @param string $AlternativeID
     *
     * @return CourseAlternativePrice
     */
    public function withAlternativeID($AlternativeID)
    {
        $new = clone $this;
        $new->AlternativeID = $AlternativeID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCourseID()
    {
        return $this->CourseID;
    }

    /**
     * @param string $CourseID
     *
     * @return CourseAlternativePrice
     */
    public function withCourseID($CourseID)
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceTitle()
    {
        return $this->PriceTitle;
    }

    /**
     * @param string $PriceTitle
     *
     * @return CourseAlternativePrice
     */
    public function withPriceTitle($PriceTitle)
    {
        $new = clone $this;
        $new->PriceTitle = $PriceTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceOrder()
    {
        return $this->PriceOrder;
    }

    /**
     * @param string $PriceOrder
     *
     * @return CourseAlternativePrice
     */
    public function withPriceOrder($PriceOrder)
    {
        $new = clone $this;
        $new->PriceOrder = $PriceOrder;

        return $new;
    }

    /**
     * @return float
     */
    public function getPriceValue()
    {
        return $this->PriceValue;
    }

    /**
     * @param float $PriceValue
     *
     * @return CourseAlternativePrice
     */
    public function withPriceValue($PriceValue)
    {
        $new = clone $this;
        $new->PriceValue = $PriceValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceValueType()
    {
        return $this->PriceValueType;
    }

    /**
     * @param string $PriceValueType
     *
     * @return CourseAlternativePrice
     */
    public function withPriceValueType($PriceValueType)
    {
        $new = clone $this;
        $new->PriceValueType = $PriceValueType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceValueSign()
    {
        return $this->PriceValueSign;
    }

    /**
     * @param string $PriceValueSign
     *
     * @return CourseAlternativePrice
     */
    public function withPriceValueSign($PriceValueSign)
    {
        $new = clone $this;
        $new->PriceValueSign = $PriceValueSign;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceConditionType()
    {
        return $this->PriceConditionType;
    }

    /**
     * @param string $PriceConditionType
     *
     * @return CourseAlternativePrice
     */
    public function withPriceConditionType($PriceConditionType)
    {
        $new = clone $this;
        $new->PriceConditionType = $PriceConditionType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceConditionValues()
    {
        return $this->PriceConditionValues;
    }

    /**
     * @param string $PriceConditionValues
     *
     * @return CourseAlternativePrice
     */
    public function withPriceConditionValues($PriceConditionValues)
    {
        $new = clone $this;
        $new->PriceConditionValues = $PriceConditionValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceConditionName()
    {
        return $this->PriceConditionName;
    }

    /**
     * @param string $PriceConditionName
     *
     * @return CourseAlternativePrice
     */
    public function withPriceConditionName($PriceConditionName)
    {
        $new = clone $this;
        $new->PriceConditionName = $PriceConditionName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPriceConditionDetail()
    {
        return $this->PriceConditionDetail;
    }

    /**
     * @param string $PriceConditionDetail
     *
     * @return CourseAlternativePrice
     */
    public function withPriceConditionDetail($PriceConditionDetail)
    {
        $new = clone $this;
        $new->PriceConditionDetail = $PriceConditionDetail;

        return $new;
    }
}
