<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Response;

use Carvago\BarionBundle\Client\Enum\CurrencyEnum;
use Carvago\BarionBundle\Client\Enum\FundingSourceEnum;
use Carvago\BarionBundle\Client\Enum\LocaleEnum;
use Carvago\BarionBundle\Client\Enum\PaymentStatusEnum;
use Carvago\BarionBundle\Client\Enum\PaymentTypeEnum;
use Carvago\BarionBundle\Client\Model\FundingInformationModel;
use JMS\Serializer\Annotation as Serializer;

class PaymentStateResponse
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
     * @Serializer\Type("string")
     * @Serializer\SerializedName("OrderNumber")
     * @var string
     */
    private $orderNumber;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSId")
     * @var string
     */
    private $posId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSName")
     * @var string
     */
    private $posName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSOwnerEmail")
     * @var string
     */
    private $posOwnerEmail;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\PaymentStatusEnum>")
     * @Serializer\SerializedName("Status")
     * @var \Carvago\BarionBundle\Client\Enum\PaymentStatusEnum
     */
    private $status;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\PaymentTypeEnum>")
     * @Serializer\SerializedName("PaymentType")
     * @var \Carvago\BarionBundle\Client\Enum\PaymentTypeEnum
     */
    private $paymentType;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\FundingSourceEnum>")
     * @Serializer\SerializedName("FundingSource")
     * @var \Carvago\BarionBundle\Client\Enum\FundingSourceEnum|null
     */
    private $fundingSource;

    /**
     * @Serializer\Type("Carvago\BarionBundle\Client\Model\FundingInformationModel")
     * @Serializer\SerializedName("FundingSource")
     * @var \Carvago\BarionBundle\Client\Model\FundingInformationModel|null
     */
    private $fundingInformation;

    /**
     * @Serializer\Type("array<enum<Carvago\BarionBundle\Client\Enum\FundingSourceEnum>>")
     * @Serializer\SerializedName("AllowedFundingSources")
     * @var \Carvago\BarionBundle\Client\Enum\FundingSourceEnum[]
     */
    private $allowedFundingSources;

    /**
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("GuestCheckout")
     * @var bool|null
     */
    private $guestCheckout;

    /**
     * @Serializer\Type("array<Carvago\BarionBundle\Client\Model\DetailedTransactionModel>")
     * @Serializer\SerializedName("Transactions")
     * @var \Carvago\BarionBundle\Client\Model\DetailedTransactionModel[]
     */
    private $transactions;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("Total")
     * @var float
     */
    private $total;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\CurrencyEnum>")
     * @Serializer\SerializedName("Currency")
     * @var \Carvago\BarionBundle\Client\Enum\CurrencyEnum
     */
    private $currency;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\LocaleEnum>")
     * @Serializer\SerializedName("SuggestedLocale")
     * @var \Carvago\BarionBundle\Client\Enum\LocaleEnum
     */
    private $suggestedLocale;

    /**
     * @Serializer\Type("int")
     * @Serializer\SerializedName("FraudRiskScore")
     * @var int
     */
    private $fraudRiskScore;

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

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getPosId(): string
    {
        return $this->posId;
    }

    public function getPosName(): string
    {
        return $this->posName;
    }

    public function getPosOwnerEmail(): string
    {
        return $this->posOwnerEmail;
    }

    public function getStatus(): PaymentStatusEnum
    {
        return $this->status;
    }

    public function setStatus(PaymentStatusEnum $status): void
    {
        $this->status = $status;
    }

    public function getPaymentType(): PaymentTypeEnum
    {
        return $this->paymentType;
    }

    public function getFundingSource(): ?FundingSourceEnum
    {
        return $this->fundingSource;
    }

    public function getFundingInformation(): ?FundingInformationModel
    {
        return $this->fundingInformation;
    }

    /** @return \Carvago\BarionBundle\Client\Enum\FundingSourceEnum[] */
    public function getAllowedFundingSources(): array
    {
        return $this->allowedFundingSources;
    }

    public function getGuestCheckout(): bool
    {
        return $this->guestCheckout;
    }

    /** @return \Carvago\BarionBundle\Client\Model\DetailedTransactionModel[] */
    public function getTransactions(): array
    {
        return $this->transactions;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getSuggestedLocale(): LocaleEnum
    {
        return $this->suggestedLocale;
    }

    public function getFraudRiskScore(): int
    {
        return $this->fraudRiskScore;
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
