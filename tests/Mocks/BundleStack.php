<?php
/**
 * Test Mock for a Bundle Stack Class
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class BundleStack implements \Slab\Components\BundleStackInterface
{
    /**
     * BundleStackInterface constructor.
     * @param \Slab\Components\BundleInterface $mainBundle
     */
    public function __construct(\Slab\Components\BundleInterface $mainBundle)
    {

    }

    /**
     * @param \Slab\Components\BundleInterface $bundle
     * @return $this
     */
    public function pushBundle(\Slab\Components\BundleInterface $bundle)
    {
        return $this;
    }

    /**
     * @param bool $latestFirst
     * @return \Slab\Components\BundleInterface[]
     */
    public function getBundles($latestFirst = false)
    {
        return [];
    }

    /**
     * @param $className
     * @return null|string
     */
    public function findClassName($className)
    {
        return null;
    }

    /**
     * @param $className
     * @return null|string
     */
    public function findClass($className)
    {
        return null;
    }

    /**
     * @param $viewName
     * @return null|string
     */
    public function findView($viewName)
    {
        return null;
    }

    /**
     * @param $configFileName
     * @return null|string
     */
    public function findConfig($configFileName)
    {
        return null;
    }

    /**
     * @param $resourceFileName
     * @return null|string
     */
    public function findResource($resourceFileName)
    {
        return null;
    }

    /**
     * @return array
     */
    public function getResourceDirectories()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getConfigDirectories()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getViewDirectories()
    {
        return [];
    }
}