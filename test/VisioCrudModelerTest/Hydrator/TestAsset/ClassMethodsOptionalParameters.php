<?php

/**
 * Description of TestAsset
 *
 * @author  pduda001 Piotr Duda (dudapiotrek@gmail.com)
 */
namespace VisioCrudModelerTest\Hydrator\TestAsset;

/**
 * Test asset to check how optional parameters of are treated methods
 */
class ClassMethodsOptionalParameters
{
    /**
     * @var string
     */
    public $foo = 'bar';

    /**
     * @param mixed $optional
     *
     * @return string
     */
    public function getFoo($optional = null)
    {
        return $this->foo;
    }

    /**
     * @param string $foo
     * @param mixed  $optional
     */
    public function setFoo($foo, $optional = null)
    {
        $this->foo = (string) $foo;
    }
}