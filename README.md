Carvago Barion bundle
========================

This bundle provides client for communicating with Barion paygate API v2 (API v1 is not supported).

You will find more in official Barion documentation on https://docs.barion.com/Main_Page

## Features

 * Request new payment (currently only immediate payment is supported) without 3DS
 * Get payment status

## Installation

Installation consists of one simple step

``` bash
composer require carvago/barion-bundle
```

It should be automatically enabled in Symfony.

## Configuration

```yaml
# config.yml
carvago_barion_bundle:
    barion_payee: 'payee@barion.com'
    barion_api_url: 'https://api.test.barion.com/v2'
    barion_pos_key: 'ABCDEFGHI1234567890'
```

## Usage

### Creating new payment request

```php
<?php

use App\Barion\Client\Enum\CurrencyEnum;
use App\Barion\Client\Enum\FundingSourceEnum;
use App\Barion\Client\Enum\LocaleEnum;
use App\Barion\Client\Enum\PaymentTypeEnum;
use App\Barion\Client\Model\ItemModel;
use App\Barion\Client\Model\PaymentTransactionModel;
use App\Barion\Client\Request\PaymentStartRequest;
use App\Barion\Client\Response\PaymentStartResponse;
use App\CarOrder\Order\Order;
use App\Environment\EnvironmentValueGetter;
use Ramsey\Uuid\Uuid;
use Tuscanicz\DateTimeBundle\DateTimeFactory;


public function createBarionPaymentStartRequest(): PaymentStartRequest
{
    $barionPayee = 'payee@barion.com';
    $dateTimeFactory = new DateTimeFactory();

    $firstOrderProductItem = new ItemModel(
        'My first fabulous product',
        1,
        'unit',
        270,
        'Isn\'t my fabulous product just great? This is it\'s description.',
        'PRODUCT-NO.47518'
    );

    $secondOrderProductItem = new ItemModel(
        'My second product',
        2,
        'x',
        666,
        'Sadly, the description is required by Barion.',
        null
    );

    $transaction = new PaymentTransactionModel(
        Uuid::uuid4()->toString(),
        $barionPayee,
        [
            $firstOrderProductItem,
            $secondOrderProductItem,
        ],
        'Transaction comment is not required, but is welcome.'
    );

    return new PaymentStartRequest(
        Uuid::uuid4()->toString(),
        PaymentTypeEnum::get(PaymentTypeEnum::IMMEDIATE),
        true,
        [
            FundingSourceEnum::get(FundingSourceEnum::ALL),
        ],
        'https://my-project.com/redirect-after-payment',
        'https://my-project.com/barion-callback',
        'Order no. 666',
        PaymentTypeEnum::get(LocaleEnum::CS),
        CurrencyEnum::get(CurrencyEnum::CZK),
        [
            $transaction
        ]
    );
}
```

### Get payment status

```php
<?php
$paymentStateRequest = new PaymentStateRequest('barion-payment-id');
$paymentStateResponse = $this->barionClient->getPaymentState($paymentStateRequest);
```

## Running tests

If you want to run the tests use:

```
./vendor/bin/phpunit ./tests
```
