<?php

namespace BYD\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BYDUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
