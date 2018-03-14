<?php

namespace Slab\Tests\Components\Mocks;

class Bundle implements \Slab\Components\BundleInterface
{
    /**
     * @return string
     */
    public function getSourceDirectory()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public function getPackageDirectory()
    {
        return __DIR__;
    }

    /**
     * @return string
     */
    public function getViewDirectory()
    {
        return __DIR__ . '/views';
    }

    /**
     * @return string
     */
    public function getConfigDirectory()
    {
        return __DIR__ . '/configs';
    }

    /**
     * @return string
     */
    public function getResourceDirectory()
    {
        return __DIR__ . '/resources';
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return dirname(get_called_class());
    }

    /**
     * @return \Psr\Log\LoggerInterface|null
     */
    public function getLogger()
    {
        return null;
    }

    /**
     * @return null
     */
    public function getInputManager()
    {
        return null;
    }

    /**
     * @return null
     */
    public function getConfigurationManager()
    {
        return null;
    }

    /**
     * @param \Slab\Components\SystemInterface $system
     * @return null|\Slab\Components\Router\RouterInterface
     */
    public function getRouter(\Slab\Components\SystemInterface $system)
    {
        return null;
    }

    /**
     * @param \Slab\Components\SystemInterface $system
     * @return null|\Slab\Components\Database\ProviderInterface
     */
    public function getDatabaseProvider(\Slab\Components\SystemInterface $system)
    {
        return null;
    }

    /**
     * @param \Slab\Components\SystemInterface $system
     * @return null|\SessionHandlerInterface
     */
    public function getSessionHandler(\Slab\Components\SystemInterface $system)
    {
        return null;
    }

    /**
     * @param \Slab\Components\SystemInterface $system
     * @return null|\Slab\Components\Cache\ProviderInterface
     */
    public function getCacheProvider(\Slab\Components\SystemInterface $system)
    {
        return null;
    }
}