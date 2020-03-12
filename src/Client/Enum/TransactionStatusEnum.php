<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class TransactionStatusEnum extends Enum
{

    public const PREPARED = 'Prepared';
    public const STARTED = 'Started';
    public const SUCCEEDED = 'Succeeded';
    public const TIMEOUT = 'Timeout';
    public const SHOP_IS_DELETED = 'ShopIsDeleted';
    public const SHOP_IS_CLOSED = 'ShopIsClosed';
    public const REJECTED = 'Rejected';
    public const REJECTED_BY_SHOP = 'RejectedByShop';
    public const STORNO = 'Storno';
    public const RESERVED = 'Reserved';
    public const DELETED = 'Deleted';
    public const EXPIRED = 'Expired';
    public const INVALID_PAYMENT_RECORD = 'InvalidPaymentRecord';
    public const PAYMENT_TIMEOUT = 'PaymentTimeOut';
    public const INVALID_PAYMENT_STATUS = 'InvalidPaymentStatus';
    public const PAYMENT_SENDER_OR_RECIPIENT_IS_INVALID = 'PaymentSenderOrRecipientIsInvalid';
    public const UNKNOWN = 'Unknown';

}
