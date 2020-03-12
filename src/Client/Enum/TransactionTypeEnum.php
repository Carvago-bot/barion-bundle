<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Enum;

use Consistence\Enum\Enum;

class TransactionTypeEnum extends Enum
{

    public const SHOP = 'Shop';
    public const TRANSFER_TO_EXISTING_USER = 'TransferToExistingUser';
    public const TRANSFER_TO_TECHNICAL_ACCOUNT = 'TransferToTechnicalAccount';
    public const RESERVE = 'Reserve';
    public const STORNO_RESERVE = 'StornoReserve';
    public const CARD_PROCESSING_FEE = 'CardProcessingFee';
    public const GATEWAY_FEE = 'GatewayFee';
    public const CARD_PROCESSING_FEE_STORNO = 'CardProcessingFeeStorno';
    public const UNSPECIFIED = 'Unspecified';
    public const CAR_PAYMENT = 'CardPayment';
    public const REFUND = 'Refund';
    public const REFUND_TO_BANK_ACCOUNT = 'RefundToBankCard';
    public const STORNO_UNSUCCESSFULL_REFUND_TO_BANK_CARD = 'StornoUnSuccessfulRefundToBankCard';
    public const UNDER_REVIEW = 'UnderReview';
    public const RELEASE_REVIEW = 'ReleaseReview';
    public const BANK_TRANSFER_PAYMENT = 'BankTransferPayment';
    public const REFUND_TO_ACCOUNT = 'RefundToBankAccount';
    public const STORNO_UNSUCCESSFULL_REFUND_TO_BANK_ACCOUNT = 'StornoUnSuccessfulRefundToBankAccount';
    public const BANK_TRANSFER_PAYMENT_FEE = 'BankTransferPaymentFee';

}
