<?php
/**
 * SlabPHP Routable Controller Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Router;

interface RoutableControllerInterface
{
    /**
     * @param RouteInterface $route
     * @return mixed
     */
    public function setRouteReference(RouteInterface $route);

    /**
     * @param \Slab\Components\SystemInterface $system
     * @return $this
     */
    public function setSystemReference(\Slab\Components\SystemInterface $system);

    /**
     * Execute the controller lifecycle
     *
     * @return \Slab\Components\Output\ControllerResponseInterface
     */
    public function executeControllerLifecycle();
}