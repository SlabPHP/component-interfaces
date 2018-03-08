<?php
/**
 * Bundle Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface BundleInterface
{
    /**
     * @return string
     */
    public function getSourceDirectory();

    /**
     * @return string
     */
    public function getPackageDirectory();

    /**
     * @return string
     */
    public function getViewDirectory();

    /**
     * @return string
     */
    public function getConfigDirectory();

    /**
     * @return string
     */
    public function getResourceDirectory();

    /**
     * @return string
     */
    public function getNamespace();

    /**
     * @return \Psr\Log\LoggerInterface|null
     */
    public function getLogger();

    /**
     * @return null|InputManagerInterface
     */
    public function getInputManager();

    /**
     * @return null|ConfigurationManagerInterface
     */
    public function getConfigurationManager();

    /**
     * @return null|Database\ProviderInterface
     */
    public function getDatabaseProvider();

    /**
     * @return \SessionHandlerInterface
     */
    public function getSessionHandler();

    /**
     * @return Cache\ProviderInterface
     */
    public function getCacheProvider();

}