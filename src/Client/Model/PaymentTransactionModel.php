<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

class PaymentTransactionModel
{

    /** @var string */
    public $posTransactionId;

    /** @var string */
    public $payee;

    /** @var float */
    public $total = 0;

    /** @var string */
    public $comment;

    /** @var \Carvago\BarionBundle\Client\Model\ItemModel[] */
    public $items = [];

    /**
     * @param string $posTransactionId
     * @param string $payee
     * @param \Carvago\BarionBundle\Client\Model\ItemModel[] $items
     * @param string|null $comment
     */
    public function __construct(
        string $posTransactionId,
        string $payee,
        array $items,
        ?string $comment
    )
    {
        $this->posTransactionId = $posTransactionId;
        $this->payee = $payee;
        $this->items = $items;
        $this->comment = $comment;

        foreach ($this->items as $item) {
            $this->total += $item->getItemTotal();
        }
    }

    public function getPosTransactionId(): string
    {
        return $this->posTransactionId;
    }

    public function getPayee(): string
    {
        return $this->payee;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    /** @return \Carvago\BarionBundle\Client\Model\ItemModel[] */
    public function getItems(): array
    {
        return $this->items;
    }

}
