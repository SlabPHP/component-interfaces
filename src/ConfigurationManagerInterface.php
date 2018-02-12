<?php
/**
 * SlabPHP Configuration Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface ConfigurationManagerInterface
{
    /**
     * Build the standard site configuration object
     */
    public function buildStandardSiteConfiguration();

    /**
     * Build configuration from path and files
     *
     * @param $paths
     * @param $files
     */
    public function buildConfiguration($paths, $files);
}