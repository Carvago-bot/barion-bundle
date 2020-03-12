<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use JMS\Serializer\Annotation as Serializer;

class FundingInformationModel
{

    /**
     * @Serializer\Type("Carvago\BarionBundle\Client\Model\BankCardModel")
     * @Serializer\SerializedName("BankCard")
     * @var \Carvago\BarionBundle\Client\Model\BankCardModel
     */
    public $bankCard;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AuthorizationCode")
     * @var string
     */
    public $authorizationCode;

    public function getBankCard(): BankCardModel
    {
        return $this->bankCard;
    }

    public function getAuthorizationCode(): string
    {
        return $this->authorizationCode;
    }

}
