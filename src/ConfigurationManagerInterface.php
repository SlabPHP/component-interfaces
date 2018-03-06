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
     * @param \Psr\Log\LoggerInterface $log
     * @return $this
     */
    public function setLogger(\Psr\Log\LoggerInterface $log);

    /**
     * @param $directories
     * @return $this
     */
    public function setFileDirectories($directories);

    /**
     * @param $filenames
     * @return $this
     */
    public function setFileNames($filenames);

    /**
     * @return bool
     */
    public function loadConfiguration();

    /**
     * @param $configurationFile
     * @return bool
     */
    public function pushConfigurationFile($configurationFile);

}