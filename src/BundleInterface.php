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
     * @param SystemInterface $system
     * @return null|Router\RouterInterface
     */
    public function getRouter(\Slab\Components\SystemInterface $system);

    /**
     * @param SystemInterface $system
     * @return null|Database\ProviderInterface
     */
    public function getDatabaseProvider(\Slab\Components\SystemInterface $system);

    /**
     * @param SystemInterface $system
     * @return \SessionHandlerInterface
     */
    public function getSessionHandler(\Slab\Components\SystemInterface $system);

    /**
     * @param SystemInterface $system
     * @return Cache\ProviderInterface
     */
    public function getCacheProvider(\Slab\Components\SystemInterface $system);

}