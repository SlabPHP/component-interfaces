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
     * @return $this
     */
    public function startBenchMark($name);

    /**
     * @param $name
     * @return $this
     */
    public function endBenchmark($name);

    /**
     * @return BenchmarkInterface[]
     */
    public function getBenchmarks();

    /**
     * @param $message
     * @param null $context
     * @return $this
     */
    public function addMessage($message, $context = null);

    /**
     * @return MessageInterface[]
     */
    public function getMessages();
}