<?php
/**
 * SlabPHP Configuration Interface
 *
 * @package SlabPHP
 * @subpackage Components
 * @author Eric
 */
namespace SlabPHP\Components;

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