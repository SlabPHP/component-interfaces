<?php
/**
 * Configuration Mock
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class Configuration implements \Slab\Components\ConfigurationManagerInterface
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * Configuration constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @param $variable
     * @return mixed
     */
    public function __get($variable)
    {
        return $this->data[$variable];
    }

    /**
     * @param \Psr\Log\LoggerInterface $log
     * @return $this
     */
    public function setLogger(\Psr\Log\LoggerInterface $log)
    {
        return $this;
    }

    /**
     * @param $directories
     * @return $this
     */
    public function setFileDirectories($directories)
    {
        return $this;
    }

    /**
     * @param $filenames
     * @return $this
     */
    public function setFileNames($filenames)
    {
        return $this;
    }

    /**
     * @return bool
     */
    public function loadConfiguration()
    {
        return true;
    }

    /**
     * @param $configurationFile
     * @return bool
     */
    public function pushConfigurationFile($configurationFile)
    {
        return true;
    }

}