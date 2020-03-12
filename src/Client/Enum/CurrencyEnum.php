<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class CurrencyEnum extends Enum
{

    public const HUF = 'HUF';
    public const EUR = 'EUR';
    public const USD = 'USD';
    public const CZK = 'CZK';

    public function isHuf(): bool
    {
        return $this->equalsValue(self::HUF);
    }

    public function isEur(): bool
    {
        return $this->equalsValue(self::EUR);
    }

    public function isUsd(): bool
    {
        return $this->equalsValue(self::USD);
    }

    public function isCzk(): bool
    {
        return $this->equalsValue(self::CZK);
    }

}
