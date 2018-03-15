<?php
/**
 * SlabPHP Router Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Router;

interface RouterInterface
{
    /**
     * Get a route by name
     *
     * @param $routeName
     * @return RouteInterface
     */
    public function getRouteByName($routeName);

    /**
     * Begin the routing of the selected route
     *
     * @param \Slab\Components\SystemInterface $system
     * @return \Slab\Components\Router\RouteInterface
     */
    public function routeRequest(\Slab\Components\SystemInterface $system);
}