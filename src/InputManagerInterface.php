<?php
/**
 * SlabPHP Input Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface InputManagerInterface
{
    /**
     * Check get, post, and cookie for return
     *
     * @param string $variable
     */
    public function request($variable);

    /**
     * Return a GET parameter, enter null for the entire array
     *
     * @param string $variable
     * @param string $default
     * @param mixed $validator
     * @return string
     */
    public function get($variable = null, $default = '', $validator = null);

    /**
     * Return a POSt parameter, enter null for the entire array
     *
     * @param string $variable
     * @param string $default
     * @param mixed $validator
     * @return string
     */
    public function post($variable = null, $default = '', $validator = null);

    /**
     * Post is set
     *
     * @param $variable
     * @return bool
     */
    public function postIsSet($variable);

    /**
     * Return a SERVER parameter, enter null for the entire array
     *
     * @param string $variable
     * @return string
     */
    public function server($variable = null);

    /**
     * Not implemented yet due to laziness
     *
     * @param string $fileName
     * @return \stdClass
     */
    public function file($fileName = null);

    /**
     * Return an environment variable
     *
     * @param string $variable
     * @return string
     */
    public function env($variable = null);

    /**
     * Return a cookie variable
     *
     * @param string $variable
     * @return string
     */
    public function cookie($variable = null);
}