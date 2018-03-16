<?php
/**
 * Debug Utility Manager Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Debug;

interface ManagerInterface
{
    /**
     * @param $name
     * @return mixed
     */
    public function startBenchMark($name);

    /**
     * @param $name
     * @return mixed
     */
    public function endBenchmark($name);

    /**
     * @return mixed
     */
    public function getBenchmarks();

    /**
     * @param $message
     * @param null $context
     * @return mixed
     */
    public function addMessage($message, $context = null);

    /**
     * @return mixed
     */
    public function getMessages();
}