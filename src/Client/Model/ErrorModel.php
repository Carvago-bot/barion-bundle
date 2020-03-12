<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use JMS\Serializer\Annotation as Serializer;

class ErrorModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Title")
     * @var string
     */
    public $title;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Description")
     * @var string
     */
    public $description;

    /**
     * @Serializer\Type("int")
     * @Serializer\SerializedName("ErrorCode")
     * @var int
     */
    public $errorCode;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("AuthData")
     * @var string
     */
    public $authData;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("EndPoint")
     * @var string
     */
    public $endPoint;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getAuthData(): string
    {
        return $this->authData;
    }

    public function getEndPoint(): ?string
    {
        return $this->endPoint;
    }

}
