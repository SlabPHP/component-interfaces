<?php
/**
 * Individual Route Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Router;

interface RouteInterface
{
    /**
     * @return \stdClass
     */
    public function getParameters();

    /**
     * @return \stdClass
     */
    public function getValidatedData();

    /**
     * @return string
     */
    public function getName();

    /**
     * @param null|array $parameters
     * @return mixed
     */
    public function getPath($parameters = null);
}