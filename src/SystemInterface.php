<?php
/**
 * System object Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface SystemInterface
{
    /**
     * @return ConfigurationManagerInterface
     */
    public function config();

    /**
     * @return SessionDriverInterface
     */
    public function session();

    /**
     * @return \Psr\Log\LoggerInterface
     */
    public function log();

    /**
     * @return InputManagerInterface
     */
    public function input();

    /**
     * @return Router\RouterInterface
     */
    public function router();

    /**
     * @return Database\DriverInterface
     */
    public function db();

    /**
     * @return Cache\DriverInterface
     */
    public function cache();

    /**
     * @return bool
     */
    public function routeRequest();

    /**
     * @return BundleStackInterface
     */
    public function stack();
}