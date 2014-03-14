<?php

namespace Jackalope;

class RepositoryFactoryJackrabbitTest extends \PHPUnit_Framework_TestCase
{
    public function testMissingRequired()
    {
        $factory = new RepositoryFactoryJackrabbit();
        $this->assertNull($factory->getRepository(array()));
    }

    public function testExtraParameter()
    {
        $factory = new RepositoryFactoryJackrabbit();

        $this->assertNull($factory->getRepository(array(
            'jackalope.jackrabbit_uri' => 'http://localhost',
            'unknown' => 'garbage',
        )));
    }
}
