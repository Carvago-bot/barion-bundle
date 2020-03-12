<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Response;

use Carvago\BarionBundle\Client\Enum\PaymentStatusEnum;
use JMS\Serializer\Annotation as Serializer;

class PaymentStartResponse
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentId")
     * @var string
     */
    private $paymentId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentRequestId")
     * @var string
     */
    private $paymentRequestId;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\PaymentStatusEnum>")
     * @Serializer\SerializedName("Status")
     * @var \Carvago\BarionBundle\Client\Enum\PaymentStatusEnum
     */
    private $status;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("QRUrl")
     * @var string
     */
    private $qrUrl;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("RecurrenceResult")
     * @var string
     */
    private $recurrenceResult;

    /**
     * @Serializer\Type("array<Carvago\BarionBundle\Client\Model\ProcessedTransactionModel>")
     * @Serializer\SerializedName("Transactions")
     * @var \Carvago\BarionBundle\Client\Model\ProcessedTransactionModel[]
     */
    private $transactions;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("GatewayUrl")
     * @var string
     */
    private $gatewayUrl;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallbackUrl")
     * @var string
     */
    private $callbackUrl;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("RedirectUrl")
     * @var string
     */
    private $redirectUrl;

    public function getPaymentId(): string
    {
        return $this->paymentId;
    }

    public function getPaymentRequestId(): string
    {
        return $this->paymentRequestId;
    }

    public function getStatus(): PaymentStatusEnum
    {
        return $this->status;
    }

    public function getQrUrl(): string
    {
        return $this->qrUrl;
    }

    public function getRecurrenceResult(): string
    {
        return $this->recurrenceResult;
    }

    /** @return \Carvago\BarionBundle\Client\Model\ProcessedTransactionModel[] */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function getGatewayUrl(): string
    {
        return $this->gatewayUrl;
    }

    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

}
