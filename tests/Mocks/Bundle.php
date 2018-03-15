<?php
/**
 * Test Mock for a Bundle Class
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class Bundle implements \Slab\Components\BundleInterface
{
    /**
     * @var string
     */
    private $sourceDirectory;

    /**
     * Bundle constructor.
     * @param $sourceDirectory
     */
    public function __construct($sourceDirectory)
    {
        $this->sourceDirectory = $sourceDirectory;
    }

    /**
     * @return string
     */
    public function getSourceDirectory()
    {
        return $this->sourceDirectory;
    }

    /**
     * @return string
     */
    public function getPackageDirectory()
    {
        return $this->sourceDirectory;
    }

    /**
     * @return string
     */
    public function getViewDirectory()
    {
        return $this->sourceDirectory . '/views';
    }

    /**
     * @return string
     */
    public function getConfigDirectory()
    {
        return $this->sourceDirectory . '/configs';
    }

    /**
     * @return string
     */
    public function getResourceDirectory()
    {
        return $this->sourceDirectory . '/resources';
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
     * @param \Slab\Components\SystemInterface $system
     * @return null
     */
    public function getConfigurationManager(\Slab\Components\SystemInterface $system)
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