<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\WebService\LearnerManagement\Type;

class CourseAlternativePrice
{
    private ?string $AlternativeID = null;

    private ?string $CourseID = null;

    private ?string $PriceTitle = null;

    private ?string $PriceOrder = null;

    private float $PriceValue;

    private ?string $PriceValueType = null;

    private ?string $PriceValueSign = null;

    private ?string $PriceConditionType = null;

    private ?string $PriceConditionValues = null;

    private ?string $PriceConditionName = null;

    private ?string $PriceConditionDetail = null;

    public function getAlternativeID(): ?string
    {
        return $this->AlternativeID;
    }

    public function withAlternativeID(?string $AlternativeID): static
    {
        $new = clone $this;
        $new->AlternativeID = $AlternativeID;

        return $new;
    }

    public function getCourseID(): ?string
    {
        return $this->CourseID;
    }

    public function withCourseID(?string $CourseID): static
    {
        $new = clone $this;
        $new->CourseID = $CourseID;

        return $new;
    }

    public function getPriceTitle(): ?string
    {
        return $this->PriceTitle;
    }

    public function withPriceTitle(?string $PriceTitle): static
    {
        $new = clone $this;
        $new->PriceTitle = $PriceTitle;

        return $new;
    }

    public function getPriceOrder(): ?string
    {
        return $this->PriceOrder;
    }

    public function withPriceOrder(?string $PriceOrder): static
    {
        $new = clone $this;
        $new->PriceOrder = $PriceOrder;

        return $new;
    }

    public function getPriceValue(): float
    {
        return $this->PriceValue;
    }

    public function withPriceValue(float $PriceValue): static
    {
        $new = clone $this;
        $new->PriceValue = $PriceValue;

        return $new;
    }

    public function getPriceValueType(): ?string
    {
        return $this->PriceValueType;
    }

    public function withPriceValueType(?string $PriceValueType): static
    {
        $new = clone $this;
        $new->PriceValueType = $PriceValueType;

        return $new;
    }

    public function getPriceValueSign(): ?string
    {
        return $this->PriceValueSign;
    }

    public function withPriceValueSign(?string $PriceValueSign): static
    {
        $new = clone $this;
        $new->PriceValueSign = $PriceValueSign;

        return $new;
    }

    public function getPriceConditionType(): ?string
    {
        return $this->PriceConditionType;
    }

    public function withPriceConditionType(?string $PriceConditionType): static
    {
        $new = clone $this;
        $new->PriceConditionType = $PriceConditionType;

        return $new;
    }

    public function getPriceConditionValues(): ?string
    {
        return $this->PriceConditionValues;
    }

    public function withPriceConditionValues(?string $PriceConditionValues): static
    {
        $new = clone $this;
        $new->PriceConditionValues = $PriceConditionValues;

        return $new;
    }

    public function getPriceConditionName(): ?string
    {
        return $this->PriceConditionName;
    }

    public function withPriceConditionName(?string $PriceConditionName): static
    {
        $new = clone $this;
        $new->PriceConditionName = $PriceConditionName;

        return $new;
    }

    public function getPriceConditionDetail(): ?string
    {
        return $this->PriceConditionDetail;
    }

    public function withPriceConditionDetail(?string $PriceConditionDetail): static
    {
        $new = clone $this;
        $new->PriceConditionDetail = $PriceConditionDetail;

        return $new;
    }
}
