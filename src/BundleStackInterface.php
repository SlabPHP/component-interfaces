<?php
/**
 * Interface for the bundle stack component
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface BundleStackInterface
{
    /**
     * BundleStackInterface constructor.
     * @param BundleInterface $mainBundle
     */
    public function __construct(\Slab\Components\BundleInterface $mainBundle);

    /**
     * @param BundleInterface $bundle
     * @return $this
     */
    public function pushBundle(\Slab\Components\BundleInterface $bundle);

    /**
     * @param bool $latestFirst
     * @return \Slab\Components\BundleInterface[]
     */
    public function getBundles($latestFirst = false);

    /**
     * @param $className
     * @return null|string
     */
    public function findClassName($className);

    /**
     * @param $className
     * @return null|string
     */
    public function findClass($className);

    /**
     * @param $viewName
     * @return null|string
     */
    public function findView($viewName);

    /**
     * @param $configFileName
     * @return null|string
     */
    public function findConfig($configFileName);

    /**
     * @param $resourceFileName
     * @return null|string
     */
    public function findResource($resourceFileName);

    /**
     * @return array
     */
    public function getResourceDirectories();

    /**
     * @return array
     */
    public function getConfigDirectories();

    /**
     * @return array
     */
    public function getViewDirectories();
}