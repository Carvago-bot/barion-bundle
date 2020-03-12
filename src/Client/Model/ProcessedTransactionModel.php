<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use Carvago\BarionBundle\Client\Enum\CurrencyEnum;
use Carvago\BarionBundle\Client\Enum\TransactionStatusEnum;
use JMS\Serializer\Annotation as Serializer;

class ProcessedTransactionModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("POSTransactionId")
     * @var string
     */
    private $posTransactionId;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("TransactionId")
     * @var string
     */
    private $transactionId;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\TransactionStatusEnum>")
     * @Serializer\SerializedName("Status")
     * @var \Carvago\BarionBundle\Client\Enum\TransactionStatusEnum
     */
    private $status;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\CurrencyEnum>")
     * @Serializer\SerializedName("Currency")
     * @var \Carvago\BarionBundle\Client\Enum\CurrencyEnum
     */
    private $currency;

    public function getPosTransactionId(): string
    {
        return $this->posTransactionId;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function getStatus(): TransactionStatusEnum
    {
        return $this->status;
    }

    public function getCurrency(): CurrencyEnum
    {
        return $this->currency;
    }

}
