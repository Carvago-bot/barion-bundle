<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use JMS\Serializer\Annotation as Serializer;

class ItemModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Name")
     * @var string
     */
    public $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Description")
     * @var string
     */
    public $description;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("Quantity")
     * @var float
     */
    public $quantity;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Unit")
     * @var string
     */
    public $unit;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("UnitPrice")
     * @var float
     */
    public $unitPrice;

    /**
     * @Serializer\Type("float")
     * @Serializer\SerializedName("ItemTotal")
     * @var float
     */
    public $itemTotal;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("SKU")
     * @var string|null
     */
    public $sku;

    public function __construct(
        string $name,
        float $quantity,
        string $unit,
        float $unitPrice,
        string $description,
        ?string $sku
    )
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit = $unit;
        $this->unitPrice = $unitPrice;
        $this->itemTotal = $quantity * $unitPrice;
        $this->description = $description;
        $this->sku = $sku;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function getItemTotal(): float
    {
        return $this->itemTotal;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

}
