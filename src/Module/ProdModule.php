<?php

declare(strict_types=1);

namespace MyVendor\Ticket\Module;

use Ray\Di\AbstractModule;
use Ray\PsrCacheModule\Psr6RedisModule;

final class ProdModule extends AbstractModule
{

    protected function configure()
    {
        $this->install(new Psr6RedisModule('localhost:6349'));
        $this->install(new \BEAR\Package\Context\ProdModule());
    }
}