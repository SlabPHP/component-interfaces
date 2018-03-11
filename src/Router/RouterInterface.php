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
     * Begin the routing of the selected route
     *
     * @param \Slab\Components\SystemInterface $system
     * @return boolean
     */
    public function routeRequest(\Slab\Components\SystemInterface $system);
}