<?php
/**
 * input mock
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class Input implements \Slab\Components\InputManagerInterface
{
    /**
     * Check get, post, and cookie for return
     *
     * @param string $variable
     */
    public function request($variable)
    {
        return !empty($_REQUEST[$variable]) ? $_REQUEST[$variable] : null;
    }

    /**
     * Post is set
     *
     * @param $variable
     * @return bool
     */
    public function postIsSet($variable)
    {
        return true;
    }

    /**
     * Return a SERVER parameter, enter null for the entire array
     *
     * @param string $variable
     * @return string
     */
    public function server($variable = null)
    {
        return $_SERVER[$variable];
    }

    /**
     * Not implemented yet due to laziness
     *
     * @param string $fileName
     * @return \stdClass
     */
    public function file($fileName = null)
    {
        return $_FILES[$fileName];
    }

    /**
     * Return an environment variable
     *
     * @param string $variable
     * @return string
     */
    public function env($variable = null)
    {
        return $_ENV[$variable];
    }

    /**
     * Return a cookie variable
     *
     * @param string $variable
     * @return string
     */
    public function cookie($variable = null)
    {
        return $_COOKIE[$variable];
    }

    /**
     * @param null $variable
     * @param string $default
     * @param null $validator
     * @return null|string
     */
    public function get($variable = null, $default = '', $validator = null)
    {
        return !empty($_GET[$variable]) ? $_GET[$variable] : null;
    }

    /**
     * Return a POSt parameter, enter null for the entire array
     *
     * @param string $variable
     * @param string $default
     * @param mixed $validator
     * @return string
     */
    public function post($variable = null, $default = '', $validator = null)
    {
        return !empty($_POST[$variable]) ? $_POST[$variable] : null;
    }

}