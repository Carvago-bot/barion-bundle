<?php

declare(strict_types=1);

namespace Carvago\BarionBundle\Client\Request;

interface RequestInterface
{

    public function getPosKey(): string;

    public function setPosKey(string $postKey): void;

}
