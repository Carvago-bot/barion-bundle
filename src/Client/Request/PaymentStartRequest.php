<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Request;

use Carvago\BarionBundle\Client\Enum\CurrencyEnum;
use Carvago\BarionBundle\Client\Enum\LocaleEnum;
use Carvago\BarionBundle\Client\Enum\PaymentTypeEnum;
use JMS\Serializer\Annotation as Serializer;

class PaymentStartRequest implements RequestInterface
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PosKey")
     * @var string
     */
    public $posKey;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("PaymentRequestId")
     * @var string
     */
    public $paymentRequestId;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\PaymentTypeEnum>")
     * @Serializer\SerializedName("PaymentType")
     * @var \Carvago\BarionBundle\Client\Enum\PaymentTypeEnum
     */
    public $paymentType;

    /**
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("GuestCheckOut")
     * @var bool
     */
    public $guestCheckout;

    /**
     * @Serializer\Type("array<enum<Carvago\BarionBundle\Client\Enum\FundingSourceEnum>>")
     * @Serializer\SerializedName("FundingSources")
     * @var \Carvago\BarionBundle\Client\Enum\FundingSourceEnum[]
     */
    public $fundingSources = [];

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("RedirectUrl")
     * @var string
     */
    public $redirectUrl;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("CallbackUrl")
     * @var string
     */
    public $callbackUrl;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("OrderNumber")
     * @var string
     */
    public $orderNumber;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\LocaleEnum>")
     * @Serializer\SerializedName("Locale")
     * @var \Carvago\BarionBundle\Client\Enum\LocaleEnum
     */
    public $locale;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\CurrencyEnum>")
     * @Serializer\SerializedName("Currency")
     * @var \Carvago\BarionBundle\Client\Enum\CurrencyEnum
     */
    public $currency;

    /**
     * @Serializer\Type("array<Carvago\BarionBundle\Client\Model\PaymentTransactionModel>")
     * @Serializer\SerializedName("Transactions")
     * @var \Carvago\BarionBundle\Client\Model\PaymentTransactionModel[]
     */
    public $transactions = [];

    /**
     * @param string $paymentRequestId
     * @param \Carvago\BarionBundle\Client\Enum\PaymentTypeEnum $paymentType
     * @param bool $guestCheckout
     * @param \Carvago\BarionBundle\Client\Enum\FundingSourceEnum[] $fundingSources
     * @param string $redirectUrl
     * @param string $callbackUrl
     * @param string $orderNumber
     * @param \Carvago\BarionBundle\Client\Enum\LocaleEnum $locale
     * @param \Carvago\BarionBundle\Client\Enum\CurrencyEnum $currency
     * @param \Carvago\BarionBundle\Client\Model\PaymentTransactionModel[] $transactions
     */
    public function __construct(
        string $paymentRequestId,
        PaymentTypeEnum $paymentType,
        bool $guestCheckout,
        array $fundingSources,
        string $redirectUrl,
        string $callbackUrl,
        string $orderNumber,
        LocaleEnum $locale,
        CurrencyEnum $currency,
        array $transactions
    )
    {
        $this->paymentRequestId = $paymentRequestId;
        $this->paymentType = $paymentType;
        $this->guestCheckout = $guestCheckout;
        $this->fundingSources = $fundingSources;
        $this->redirectUrl = $redirectUrl;
        $this->callbackUrl = $callbackUrl;
        $this->orderNumber = $orderNumber;
        $this->locale = $locale;
        $this->currency = $currency;
        $this->transactions = $transactions;
    }

    public function getPosKey(): string
    {
        return $this->posKey;
    }

    public function setPosKey(string $posKey): void
    {
        $this->posKey = $posKey;
    }

    public function getPaymentRequestId(): string
    {
        return $this->paymentRequestId;
    }

    public function getPaymentType(): PaymentTypeEnum
    {
        return $this->paymentType;
    }

    public function getGuestCheckout(): bool
    {
        return $this->guestCheckout;
    }

    /** @return \Carvago\BarionBundle\Client\Enum\FundingSourceEnum[] */
    public function getFundingSources(): array
    {
        return $this->fundingSources;
    }

    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }

    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getLocale(): LocaleEnum
    {
        return $this->locale;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    /** @return \Carvago\BarionBundle\Client\Model\PaymentTransactionModel[] */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

}
