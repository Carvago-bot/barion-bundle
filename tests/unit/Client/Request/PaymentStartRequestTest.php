<?php

declare(strict_types=1);

namespace Carvago\BarionBundle;

use Carvago\BarionBundle\Client\Enum\CurrencyEnum;
use Carvago\BarionBundle\Client\Enum\FundingSourceEnum;
use Carvago\BarionBundle\Client\Enum\LocaleEnum;
use Carvago\BarionBundle\Client\Enum\PaymentTypeEnum;
use Carvago\BarionBundle\Client\Model\ItemModel;
use Carvago\BarionBundle\Client\Model\PaymentTransactionModel;
use Carvago\BarionBundle\Client\Request\PaymentStartRequest;
use PHPUnit\Framework\TestCase;

class PaymentStartRequestTest extends TestCase
{

    public function testCreatePaymentStartRequest(): void
    {
        $firstOrderProductItem = new ItemModel(
            'My first fabulous product',
            1.0,
            'unit',
            270.0,
            'Isn\'t my fabulous product just great? This is it\'s description.',
            'PRODUCT-NO.47518'
        );

        $secondOrderProductItem = new ItemModel(
            'My second product',
            2.0,
            'x',
            666.0,
            'Sadly, the description is required by Barion.',
            null
        );

        $transaction = new PaymentTransactionModel(
            'transaction-uuid',
            'payee@barion.com',
            [
                $firstOrderProductItem,
                $secondOrderProductItem,
            ],
            'Transaction comment is not required, but is welcome.'
        );

        $paymentStartRequest = new PaymentStartRequest(
            'payment-request-uuid',
            PaymentTypeEnum::get(PaymentTypeEnum::IMMEDIATE),
            true,
            [
                FundingSourceEnum::get(FundingSourceEnum::ALL),
            ],
            'https://my-project.com/redirect',
            'https://my-project.com/callback',
            'Order no. 666',
            LocaleEnum::get(LocaleEnum::CS),
            CurrencyEnum::get(CurrencyEnum::CZK),
            [
                $transaction
            ]
        );
        $paymentStartRequest->setPosKey('barion-pos-key');

        self::assertSame(
            'barion-pos-key',
            $paymentStartRequest->getPosKey()
        );


        self::assertSame(
            'payment-request-uuid',
            $paymentStartRequest->getPaymentRequestId()
        );

        self::assertTrue(
            $paymentStartRequest->getPaymentType()->isImmediate()
        );

        self::assertTrue(
            $paymentStartRequest->getGuestCheckout()
        );

        self::assertCount(
            1,
            $paymentStartRequest->getFundingSources()
        );

        self::assertSame(
            'https://my-project.com/redirect',
            $paymentStartRequest->getRedirectUrl()
        );

        self::assertSame(
            'https://my-project.com/callback',
            $paymentStartRequest->getCallbackUrl()
        );

        self::assertSame(
            'Order no. 666',
            $paymentStartRequest->getOrderNumber()
        );

        self::assertTrue(
            $paymentStartRequest->getLocale()->isCs()
        );

        self::assertTrue(
            $paymentStartRequest->getCurrency()->isCzk()
        );


        self::assertCount(
            1,
            $paymentStartRequest->getTransactions()
        );

        $paymentStartRequestTransaction = $paymentStartRequest->getTransactions()[0];

        self::assertSame(
            'transaction-uuid',
            $paymentStartRequestTransaction->getPosTransactionId()
        );

        self::assertSame(
            'payee@barion.com',
            $paymentStartRequestTransaction->getPayee()
        );

        self::assertSame(
            'Transaction comment is not required, but is welcome.',
            $paymentStartRequestTransaction->getComment()
        );

        self::assertSame(
            1602.0,
            $paymentStartRequestTransaction->getTotal()
        );


        self::assertCount(
            2,
            $paymentStartRequestTransaction->getItems()
        );

        $firstItem = $paymentStartRequestTransaction->getItems()[0];

        self::assertSame(
            'My first fabulous product',
            $firstItem->getName()
        );

        self::assertSame(
            1.0,
            $firstItem->getQuantity()
        );

        self::assertSame(
            'unit',
            $firstItem->getUnit()
        );

        self::assertSame(
            270.0,
            $firstItem->getUnitPrice()
        );

        self::assertSame(
            'Isn\'t my fabulous product just great? This is it\'s description.',
            $firstItem->getDescription()
        );

        self::assertSame(
            'PRODUCT-NO.47518',
            $firstItem->getSku()
        );


        $secondItem = $paymentStartRequestTransaction->getItems()[1];

        self::assertSame(
            'My second product',
            $secondItem->getName()
        );

        self::assertSame(
            2.0,
            $secondItem->getQuantity()
        );

        self::assertSame(
            'x',
            $secondItem->getUnit()
        );

        self::assertSame(
            666.0,
            $secondItem->getUnitPrice()
        );

        self::assertSame(
            'Sadly, the description is required by Barion.',
            $secondItem->getDescription()
        );

        self::assertNull(
            $secondItem->getSku()
        );
    }

}