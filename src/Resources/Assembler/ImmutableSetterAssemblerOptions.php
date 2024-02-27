<?php

namespace Lingoda\ThinkingcapBundle\Resources\Assembler;

class ImmutableSetterAssemblerOptions
{
    private bool $typeHints = true;
    private bool $returnTypes = true;
    private bool $docBlocks = true;
    private bool $nillable = true;

    public function withTypeHints(bool $typeHints = true): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->typeHints = $typeHints;

        return $new;
    }

    public function withReturnTypes(bool $returnTypes = true): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->returnTypes = $returnTypes;

        return $new;
    }

    public function useTypeHints(): bool
    {
        return $this->typeHints;
    }

    public function useReturnTypes(): bool
    {
        return $this->returnTypes;
    }

    public static function create(): ImmutableSetterAssemblerOptions
    {
        return new self();
    }

    public function withDocBlocks(bool $withDocBlocks = true): ImmutableSetterAssemblerOptions
    {
        $new = clone $this;
        $new->docBlocks = $withDocBlocks;

        return $new;
    }

    public function useDocBlocks(): bool
    {
        return $this->docBlocks;
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
