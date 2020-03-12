<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Response;

use Carvago\BarionBundle\Client\Model\ErrorModel;
use JMS\Serializer\Annotation as Serializer;

class ErrorResponse
{

    /**
     * @Serializer\Type("array<Carvago\BarionBundle\Client\Model\ErrorModel>")
     * @Serializer\SerializedName("Errors")
     * @var \Carvago\BarionBundle\Client\Model\ErrorModel[]
     */
    private $errors = [];

    public function hasErrors(): bool
    {
        return count($this->errors) > 0;
    }

    /** @return \Carvago\BarionBundle\Client\Model\ErrorModel[] */
    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getFirstError(): ErrorModel
    {
        if (count($this->errors) === 0) {
            throw new \Carvago\BarionBundle\Client\Exception\ErrorResponseContainsNoErrorsException('Error response contains no errors.');
        }

        return array_values($this->errors)[0];
    }

}
