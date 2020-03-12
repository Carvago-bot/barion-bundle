<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Request;

class PaymentStateRequest implements RequestInterface
{

    /** @var string */
    private $posKey;

    /** @var string */
    private $paymentId;

    public function __construct(
        string $paymentId
    )
    {
        $this->paymentId = $paymentId;
    }

    public function getPosKey(): string
    {
        return $this->posKey;
    }

    public function setPosKey(string $posKey): void
    {
        $this->posKey = $posKey;
    }

    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

}
