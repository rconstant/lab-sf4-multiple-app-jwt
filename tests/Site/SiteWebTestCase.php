<?php

namespace Site\Tests;

use App\VirtualKernel;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

abstract class SiteWebTestCase extends WebTestCase
{
    protected static function createKernel(array $options = array())
    {
        return new VirtualKernel(
            isset($options['environment']) ? $options['environment'] : 'test',
            isset($options['debug']) ? $options['debug'] : true,
            'site'
        );
    }
}