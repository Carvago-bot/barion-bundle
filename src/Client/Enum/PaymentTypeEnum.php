<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class PaymentTypeEnum extends Enum
{

    public const IMMEDIATE = 'Immediate';
    public const RESERVATION = 'Reservation';
    public const DELAYED_CAPTURE = 'DelayedCapture';

    public function isImmediate(): bool
    {
        return $this->equalsValue(self::IMMEDIATE);
    }

    public function isReservation(): bool
    {
        return $this->equalsValue(self::RESERVATION);
    }

    public function isDelayedCapture(): bool
    {
        return $this->equalsValue(self::DELAYED_CAPTURE);
    }

}
