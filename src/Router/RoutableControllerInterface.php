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
     * @param \Slab\Components\SystemInterface $system
     * @return mixed
     */
    public function setSystemReference(\Slab\Components\SystemInterface $system);

    /**
     * Execute the controller lifecycle
     *
     * @return mixed
     */
    public function executeControllerLifecycle();
}