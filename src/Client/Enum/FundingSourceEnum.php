<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class FundingSourceEnum extends Enum
{

    public const ALL = 'All';
    public const BALANCE = 'Balance';
    public const BANK_CARD = 'Bankcard';

}
