<?php
/**
 * SlabPHP Router Interface
 *
 * @package SlabPHP
 * @subpackage Components
 * @author Eric
 */
namespace SlabPHP\Components;

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