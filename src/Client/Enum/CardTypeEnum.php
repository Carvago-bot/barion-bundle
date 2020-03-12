<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class CardTypeEnum extends Enum
{

    public const UNKNOWN = 'Unknown';
    public const MASTERCARD = 'MasterCard';
    public const VISA = 'Visa';
    public const AMERICAN_EXPRESS = 'AmericanExpress';
    public const ELECTRON = 'Electron';
    public const MAESTRO = 'Maestro';

}
