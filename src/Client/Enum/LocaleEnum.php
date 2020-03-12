<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class LocaleEnum extends Enum
{

    public const CS = 'cs-CZ';
    public const DE = 'de-DE';
    public const EN = 'en-US';
    public const ES = 'es-ES';
    public const FR = 'fr-FR';
    public const HU = 'hu-HU';
    public const SK = 'sk-SK';
    public const SL = 'sl-SI';
    public const GR = 'el-GR';

    public function isCs(): bool
    {
        return $this->equalsValue(self::CS);
    }

    public function isDe(): bool
    {
        return $this->equalsValue(self::DE);
    }

    public function isEn(): bool
    {
        return $this->equalsValue(self::EN);
    }

    public function isEs(): bool
    {
        return $this->equalsValue(self::ES);
    }

    public function isFr(): bool
    {
        return $this->equalsValue(self::FR);
    }

    public function isHu(): bool
    {
        return $this->equalsValue(self::HU);
    }

    public function isSk(): bool
    {
        return $this->equalsValue(self::SK);
    }

    public function isSl(): bool
    {
        return $this->equalsValue(self::SL);
    }

    public function isGr(): bool
    {
        return $this->equalsValue(self::GR);
    }

}
