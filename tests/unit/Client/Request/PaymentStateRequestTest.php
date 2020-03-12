<?php

declare(strict_types=1);

namespace Carvago\BarionBundle;

use Carvago\BarionBundle\Client\Request\PaymentStateRequest;
use PHPUnit\Framework\TestCase;

class PaymentStateRequestTest extends TestCase
{

    public function testCreatePaymentStartRequest(): void
    {
        $paymentStateRequest = new PaymentStateRequest('payment-state-request-id');
        $paymentStateRequest->setPosKey('barion-pos-key');

        self::assertSame(
            'barion-pos-key',
            $paymentStateRequest->getPosKey()
        );

        self::assertSame(
            'payment-state-request-id',
            $paymentStateRequest->getPaymentId()
        );
    }

}