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
     * Execute the controller lifecycle
     *
     * @return mixed
     */
    public function executeControllerLifecycle();
}