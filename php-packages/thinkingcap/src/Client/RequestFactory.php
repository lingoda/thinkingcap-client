<?php

declare(strict_types = 1);

namespace Lingoda\ThinkingcapBundle\Client;

use Phpro\SoapClient\Type\RequestInterface;

class RequestFactory
{
    public const API_KEY_PLACEHOLDER = '###api-key-placeholder###';

    /**
     * @template TRequest of RequestInterface
     *
     * @param class-string<TRequest> $typeClass
     * @phpstan-param mixed ...$args
     *
     * @return TRequest
     */
    public static function create(string $typeClass, ...$args)
    {
        return new $typeClass(self::API_KEY_PLACEHOLDER, ...$args);
    }
}
