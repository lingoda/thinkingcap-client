<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

class GetterAssemblerOptions
{
    private bool $boolGetters = false;
    private bool $returnType = true;
    private bool $docBlocks = true;
    private bool $optionalValue = false;
    private bool $nillable = true;

    public static function create(): GetterAssemblerOptions
    {
        return new self();
    }

    public function withBoolGetters(bool $boolGetters = true): GetterAssemblerOptions
    {
        $new = clone $this;
        $new->boolGetters = $boolGetters;

        return $new;
    }

    public function withReturnType(bool $returnType = true): GetterAssemblerOptions
    {
        $new = clone $this;
        $new->returnType = $returnType;

        return $new;
    }

    public function useBoolGetters(): bool
    {
        return $this->boolGetters;
    }

    public function useReturnType(): bool
    {
        return $this->returnType;
    }

    public function withDocBlocks(bool $withDocBlocks = true): GetterAssemblerOptions
    {
        $new = clone $this;
        $new->docBlocks = $withDocBlocks;

        return $new;
    }

    public function useDocBlocks(): bool
    {
        return $this->docBlocks;
    }

    public function withOptionalValue(bool $withOptionalValue = true): self
    {
        $new = clone $this;
        $new->optionalValue = $withOptionalValue;

        return $new;
    }

    public function useOptionalValue(): bool
    {
        return $this->optionalValue;
    }

    public function withNillable(bool $nillable = false): self
    {
        $new = clone $this;
        $new->nillable = $nillable;

        return $new;
    }

    public function useNillable(): bool
    {
        return $this->nillable;
    }
}
