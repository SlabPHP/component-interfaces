<?php
/**
 * Debug Benchmark Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Debug;

interface BenchmarkInterface
{
    /**
     * BenchmarkInterface constructor.
     * @param $name
     */
    public function __construct($name);

    /**
     * @return mixed
     */
    public function end();

    /**
     * @return int
     */
    public function getMemoryUsage();

    /**
     * @return int
     */
    public function getMemoryUsageReal();

    /**
     * @return float
     */
    public function getElapsedTime();
}