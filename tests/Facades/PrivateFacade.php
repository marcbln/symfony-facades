<?php

namespace Marcbln\Symfony\Facades\Tests\Facades;

use Marcbln\Symfony\Facades\AbstractFacade;

class PrivateFacade extends AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected static function getServiceIdentifier()
    {
        return 'marcbln.facades.test_service';
    }
}
