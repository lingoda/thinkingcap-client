<?php

declare(strict_types=1);

namespace Lingoda\ThinkingcapBundle\Tests\Transport;

use Soap\Engine\HttpBinding\SoapRequest;
use Soap\Engine\HttpBinding\SoapResponse;
use Soap\Engine\Transport;

/**
 * Wraps a real transport and records responses to fixture files.
 *
 * Usage:
 *   $recording = new RecordingTransport($realTransport, __DIR__ . '/../fixtures/soap');
 *   // ... make SOAP calls via engine built with this transport ...
 *   // Fixtures are saved automatically.
 */
final class RecordingTransport implements Transport
{
    public function __construct(
        private readonly Transport $inner,
        private readonly string $fixtureDir,
    ) {
        if (!is_dir($this->fixtureDir)) {
            mkdir($this->fixtureDir, 0755, true);
        }
    }

    public function request(SoapRequest $request): SoapResponse
    {
        $response = $this->inner->request($request);

        $action = $this->normalizeAction($request->getAction());
        $fixturePath = $this->fixtureDir . '/' . $action . '.xml';

        file_put_contents($fixturePath, $response->getPayload());

        return $response;
    }

    private function normalizeAction(string $action): string
    {
        $parts = explode('/', rtrim($action, '/'));

        return end($parts);
    }
}
