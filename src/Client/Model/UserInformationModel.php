<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use JMS\Serializer\Annotation as Serializer;

class UserInformationModel
{

    /**
     * @Serializer\Type("Carvago\BarionBundle\Client\Model\NameInformationModel")
     * @Serializer\SerializedName("Name")
     * @var \Carvago\BarionBundle\Client\Model\NameInformationModel
     */
    private $name;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("Email")
     * @var string
     */
    private $email;

    public function getName(): NameInformationModel
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

}
