<?php

namespace Marcbln\Symfony\Facades\Tests\Facades;

use Marcbln\Symfony\Facades\AbstractFacade;

class PublicFacade extends AbstractFacade
{
    /**
     * @inheritdoc
     */
    protected static function getServiceIdentifier()
    {
        return 'logger';
    }
}
