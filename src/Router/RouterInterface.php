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
     * Post initialization tasks
     */
    public function postInitializationTasks();

    /**
     * Begin the routing of the selected route
     *
     * @return boolean
     */
    public function routeRequest();
}