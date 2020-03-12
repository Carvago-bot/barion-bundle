<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Exception;

use Carvago\BarionBundle\Client\Response\ErrorResponse;

class BarionErrorException extends \Consistence\PhpException
{

    /** @var \Carvago\BarionBundle\Client\Response\ErrorResponse */
    public $errorResponse;

    public function __construct(
        string $responseMessage,
        int $code,
        ErrorResponse $errorResponse,
        ?\Throwable $previous = null
    )
    {
        parent::__construct($responseMessage, $previous);

        $this->code = $code;
        $this->errorResponse = $errorResponse;
    }

    public function hasErrorResponse(): bool
    {
        return $this->errorResponse !== null;
    }

    public function getErrorResponse(): ErrorResponse
    {
        return $this->errorResponse;
    }

}
