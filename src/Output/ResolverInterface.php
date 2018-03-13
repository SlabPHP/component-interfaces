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
     * @param ControllerResponseInterface $response
     * @return boolean
     */
    public function resolveResponse(ControllerResponseInterface $response);
}