<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Tests\Transport;

use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

/**
 * Serves pre-recorded SOAP XML responses from fixture files.
 * Fixtures are stored as plain XML files named after the SOAP action.
 */
final class FixtureTransport implements Transport
{
    public function __construct(
        private readonly string $fixtureDir,
    ) {
    }

    public function request(SoapRequest $request): SoapResponse
    {
        $action = $this->normalizeAction($request->getAction());
        $fixturePath = $this->fixtureDir . '/' . $action . '.xml';

        if (!file_exists($fixturePath)) {
            throw new \RuntimeException(sprintf(
                'No fixture found for SOAP action "%s" at path "%s". Run the recording transport first to capture it.',
                $request->getAction(),
                $fixturePath,
            ));
        }

        return new SoapResponse(file_get_contents($fixturePath));
    }

    private function normalizeAction(string $action): string
    {
        // Extract the action name from the full URI
        // e.g. "http://www.thinkingcap.com/GetUserByEmail" -> "GetUserByEmail"
        $parts = explode('/', rtrim($action, '/'));

        return end($parts);
    }
}
