<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Exception;

use UnexpectedValueException;

/**
 * Thrown by the generated ensure*() getters when Thinkingcap omitted a field the caller requires.
 */
final class MissingFieldException extends UnexpectedValueException
{
    public static function create(string $type, string $field): self
    {
        return new self(sprintf('Thinkingcap response is missing "%s::%s"', $type, $field));
    }
}
