<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client;

use Carvago\BarionBundle\Client\Request\PaymentStartRequest;
use Carvago\BarionBundle\Client\Request\PaymentStateRequest;
use Carvago\BarionBundle\Client\Response\ErrorResponse;
use Carvago\BarionBundle\Client\Response\PaymentStartResponse;
use Carvago\BarionBundle\Client\Response\PaymentStateResponse;
use GuzzleHttp\Client;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializerInterface;

class BarionClient
{

    public const INITIALIZE_CLASS_USING_INITIATOR = 'initialize-class-using-initiator';

    /** @var \GuzzleHttp\Client */
    private $guzzleClient;

    /** @var string */
    private $apiUrl;

    /** @var string */
    private $posKey;

    /** @var \JMS\Serializer\SerializerInterface */
    private $serializer;

    public function __construct(
        string $apiUrl,
        string $posKey,
        SerializerInterface $serializer
    )
    {
        $this->guzzleClient = new Client(['headers' => ['Content-Type' => 'application/json']]);
        $this->apiUrl = $apiUrl;
        $this->posKey = $posKey;
        $this->serializer = $serializer;
    }

    public function startPayment(PaymentStartRequest $paymentStartRequest): PaymentStartResponse
    {
        $paymentStartRequest->setPosKey($this->posKey);

        try {
            $clientResponse = $this->guzzleClient->post(
                sprintf(
                    '%s/Payment/Start',
                    $this->apiUrl
                ),
                [
                    'body' => $this->serializer->serialize($paymentStartRequest, 'json'),
                ]
            );

            /** @var \Carvago\BarionBundle\Client\Response\PaymentStartResponse $paymentStartResponse */
            $paymentStartResponse = $this->serializer->deserialize($clientResponse->getBody()->getContents(), PaymentStartResponse::class, 'json');

            return $paymentStartResponse;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $this->throwErrorResponseException($e, 'Failed to start payment.');
        }
    }

    public function getPaymentState(PaymentStateRequest $paymentStateRequest): PaymentStateResponse
    {
        $paymentStateRequest->setPosKey($this->posKey);

        try {
            $clientResponse = $this->guzzleClient->get(
                sprintf(
                    '%s/Payment/GetPaymentState?POSKey=%s&paymentId=%s',
                    $this->apiUrl,
                    $paymentStateRequest->getPosKey(),
                    $paymentStateRequest->getPaymentId()
                )
            );

            $deserializationContext = new DeserializationContext();
            $deserializationContext->setAttribute(self::INITIALIZE_CLASS_USING_INITIATOR, true);

            /** @var \Carvago\BarionBundle\Client\Response\PaymentStateResponse $paymentStateResponse */
            $paymentStateResponse = $this->serializer->deserialize($clientResponse->getBody()->getContents(), PaymentStateResponse::class, 'json', $deserializationContext);

            return $paymentStateResponse;
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $this->throwErrorResponseException($e, 'Failed to start payment.');
        }
    }

    private function throwErrorResponseException(
        \GuzzleHttp\Exception\ClientException $exception,
        string $responseMessage
    ): void
    {
        /** @var \Carvago\BarionBundle\Client\Response\ErrorResponse $errorResponse */
        $errorResponse = $this->serializer->deserialize($exception->getResponse()->getBody()->getContents(), ErrorResponse::class, 'json');
        $errorResponseCode = $errorResponse->getFirstError()->getErrorCode();

        throw new \Carvago\BarionBundle\Client\Exception\BarionErrorException(
            $responseMessage,
            $errorResponseCode,
            $errorResponse
        );
    }

}
