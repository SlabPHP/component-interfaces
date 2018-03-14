<?php
/**
 * Controller Response Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Output;

interface ControllerResponseInterface
{
    /**
     * @return mixed
     */
    public function getResolver();

    /**
     * @return mixed
     */
    public function getData();

    /**
     * @return mixed
     */
    public function getStatusCode();

    /**
     * @return mixed
     */
    public function getHeaders();
}