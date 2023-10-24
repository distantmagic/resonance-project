<?php

declare(strict_types=1);

namespace App;

use Distantmagic\Resonance\Attribute\Singleton;
use Distantmagic\Resonance\HtmlErrorTemplateInterface;
use Distantmagic\Resonance\HttpError;
use Distantmagic\Resonance\HttpInterceptableInterface;
use Distantmagic\Resonance\TwigTemplate;
use Swoole\Http\Request;
use Swoole\Http\Response;

#[Singleton(provides: HtmlErrorTemplateInterface::class)]
readonly class HtmlErrorTemplate implements HtmlErrorTemplateInterface
{
    public function renderHttpError(Request $request, Response $response, HttpError $httpError): HttpInterceptableInterface
    {
        return new TwigTemplate('error.twig', [
            'error' => $httpError,
        ]);
    }
}