<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use Carvago\BarionBundle\Client\Enum\CurrencyEnum;
use Carvago\BarionBundle\Client\Enum\TransactionStatusEnum;
use Carvago\BarionBundle\Client\Enum\TransactionTypeEnum;
use JMS\Serializer\Annotation as Serializer;

class DetailedTransactionModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TransactionId")
     * @var string
     */
    private $transactionId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSTransactionId")
     * @var string
     */
    private $posTransactionId;

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
     * @Serializer\Type("Carvago\BarionBundle\Client\Model\UserInformationModel")
     * @Serializer\SerializedName("Payer")
     * @var \Carvago\BarionBundle\Client\Model\UserInformationModel
     */
    private $payer;

    /**
     * @Serializer\Type("Carvago\BarionBundle\Client\Model\UserInformationModel")
     * @Serializer\SerializedName("Payee")
     * @var \Carvago\BarionBundle\Client\Model\UserInformationModel
     */
    private $payee;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\TransactionStatusEnum>")
     * @Serializer\SerializedName("Status")
     * @var \Carvago\BarionBundle\Client\Enum\TransactionStatusEnum
     */
    private $status;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\TransactionTypeEnum>")
     * @Serializer\SerializedName("TransactionType")
     * @var \Carvago\BarionBundle\Client\Enum\TransactionTypeEnum
     */
    private $transactionType;

    /**
     * @Serializer\Type("array<Carvago\BarionBundle\Client\Model\ItemModel>")
     * @Serializer\SerializedName("Items")
     * @var \Carvago\BarionBundle\Client\Model\ItemModel[]
     */
    private $items = [];

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("RelatedId")
     * @var string
     */
    private $relatedId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSId")
     * @var string
     */
    private $posId;

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function getPosTransactionId(): string
    {
        return $this->posTransactionId;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

    public function getPayer(): UserInformationModel
    {
        return $this->payer;
    }

    public function getPayee(): UserInformationModel
    {
        return $this->payee;
    }

    public function getStatus(): TransactionStatusEnum
    {
        return $this->status;
    }

    public function getTransactionType(): TransactionTypeEnum
    {
        return $this->transactionType;
    }

    /** @return \Carvago\BarionBundle\Client\Model\ItemModel[] */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getRelatedId(): string
    {
        return $this->relatedId;
    }

    public function getPosId(): string
    {
        return $this->posId;
    }

}
