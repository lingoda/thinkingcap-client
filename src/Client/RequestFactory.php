<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Client;

use Phpro\SoapClient\Type\RequestInterface;

class RequestFactory
{
    public const API_KEY_PLACEHOLDER = '###api-key:%s';

    /**
     * @template TRequest of RequestInterface
     *
     * @param class-string<TRequest> $typeClass
     * @phpstan-param mixed ...$args
     *
     * @return TRequest
     */
    public static function create(string $domainName, string $typeClass, ...$args)
    {
        return new $typeClass(self::assemblePlaceholder($domainName), ...$args);
    }

    private static function assemblePlaceholder(string $domainName): string
    {
        return sprintf(self::API_KEY_PLACEHOLDER, $domainName);
    }
}
