<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use Carvago\BarionBundle\Client\Enum\CardTypeEnum;
use JMS\Serializer\Annotation as Serializer;

class BankCardModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("MaskedPan")
     * @var string
     */
    public $maskedPan;

    /**
     * @Serializer\Type("enum<Carvago\BarionBundle\Client\Enum\CardTypeEnum>")
     * @Serializer\SerializedName("BankCardType")
     * @var \Carvago\BarionBundle\Client\Enum\CardTypeEnum
     */
    public $bankCardType;

    /**
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ValidThruYear")
     * @var string
     */
    public $validThruYear;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("ValidThruMonth")
     * @var string
     */
    public $validThruMonth;

    public function getMaskedPan(): string
    {
        return $this->maskedPan;
    }

    public function getBankCardType(): CardTypeEnum
    {
        return $this->bankCardType;
    }

    public function getValidThruYear(): string
    {
        return $this->validThruYear;
    }

    public function getValidThruMonth(): string
    {
        return $this->validThruMonth;
    }

}
