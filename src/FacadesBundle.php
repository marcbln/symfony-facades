<?php

namespace Marcbln\Symfony\Facades;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FacadesBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function boot()
    {
        parent::boot();

        Container::init($this->container);
    }
}
