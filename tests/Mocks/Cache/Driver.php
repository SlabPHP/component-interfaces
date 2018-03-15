<?php
/**
 * CacheDriverInterface mock
 *
 * @package Slab
 * @subpckage Tests
 *
 */
namespace Slab\Tests\Components\Mocks\Cache;

class Driver implements \Slab\Components\Cache\DriverInterface
{
    /**
     * @var \Slab\Components\Cache\ProviderInterface
     */
    private $provider;

    /**
     * Constructor stores a provider instance
     *
     * @param string $provider
     */
    public function __construct($provider)
    {

    }

    /**
     * @param \Slab\Components\Cache\ProviderInterface $provider
     * @return $this
     */
    public function setProvider(\Slab\Components\Cache\ProviderInterface $provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get a provider's interface, if available
     *
     * @return \Slab\Components\Cache\ProviderInterface
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Retrieve data from memcache
     *
     * @param string $key
     */
    public function get($key)
    {
        return 'get';
    }

    /**
     * Saves data in cache
     *
     * @param string $key
     * @param mixed $data
     * @param integer $ttl
     * @return boolean
     */
    public function set($key, $data, $ttl = 3600)
    {
        return 'set';
    }

    /**
     * Delete a key from memcache
     *
     * @param string $key
     * @return boolean
     */
    public function delete($key)
    {
        return 'deleted';
    }

    /**
     * Get a provider's interface, if available
     *
     * @return mixed
     */
    public function getInterface()
    {
        return 'interface';
    }

    /**
     * Do a cache request
     *
     * @param mixed $request
     * @return mixed
     */
    public function execute($request)
    {
        return 'executed';
    }
}

