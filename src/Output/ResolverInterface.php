<?php
/**
 * Output Resolver Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Output;

interface ResolverInterface
{
    /**
     * ResolverInterface constructor.
     * @param \Slab\Components\SystemInterface $system
     */
    public function __construct(\Slab\Components\SystemInterface $system);

    /**
     * @param ControllerResponseInterface $response
     * @return boolean
     */
    public function resolveResponse(ControllerResponseInterface $response);
}