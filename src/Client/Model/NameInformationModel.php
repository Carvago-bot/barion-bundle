<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Model;

use JMS\Serializer\Annotation as Serializer;

class NameInformationModel
{

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("LoginName")
     * @var string
     */
    public $loginName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("FirstName")
     * @var string
     */
    public $firstName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("LastName")
     * @var string
     */
    public $lastName;

    /**
     * @Serializer\Type("string")
     * @Serializer\SerializedName("OrganizationName")
     * @var string
     */
    public $organizationName;

    public function getLoginName(): string
    {
        return $this->loginName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

}
