<?php
/**
 * router mock
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks\Router;

class Router implements \Slab\Components\Router\RouterInterface
{
    /**
     * @param $name
     * @return Route
     */
    public function getRouteByName($name)
    {
        $route = new Route();
        return $route;
    }

    /**
     * Begin the routing of the selected route
     *
     * @param \Slab\Components\SystemInterface $system
     * @return boolean
     */
    public function routeRequest(\Slab\Components\SystemInterface $system)
    {
        return null;
    }
}