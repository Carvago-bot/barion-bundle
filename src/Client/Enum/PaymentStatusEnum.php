<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class PaymentStatusEnum extends Enum
{

    public const PREPARED = 'Prepared';
    public const STARTED = 'Started';
    public const IN_PROGRESS = 'InProgress';
    public const WAITING = 'Waiting';
    public const RESERVED = 'Reserved';
    public const AUTHORIZED = 'Authorized';
    public const CANCELED = 'Canceled';
    public const SUCCEEDED = 'Succeeded';
    public const FAILED = 'Failed';
    public const PARTIALLY_SUCCEEDED = 'PartiallySucceeded';
    public const EXPIRED = 'Expired';

    public function isPrepared(): bool
    {
        return $this->equalsValue(self::PREPARED);
    }

    public function isStarted(): bool
    {
        return $this->equalsValue(self::STARTED);
    }

    public function isInProgress(): bool
    {
        return $this->equalsValue(self::IN_PROGRESS);
    }

    public function isWaiting(): bool
    {
        return $this->equalsValue(self::WAITING);
    }

    public function isReserved(): bool
    {
        return $this->equalsValue(self::RESERVED);
    }

    public function isAuthorized(): bool
    {
        return $this->equalsValue(self::AUTHORIZED);
    }

    public function isPartiallySucceeded(): bool
    {
        return $this->equalsValue(self::PARTIALLY_SUCCEEDED);
    }

    public function isSucceeded(): bool
    {
        return $this->equalsValue(self::SUCCEEDED);
    }

    public function isCanceled(): bool
    {
        return $this->equalsValue(self::CANCELED);
    }

    public function isFailed(): bool
    {
        return $this->equalsValue(self::FAILED);
    }

    public function isExpired(): bool
    {
        return $this->equalsValue(self::EXPIRED);
    }

}
