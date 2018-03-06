<?php
/**
 * SlabPHP Cache Driver Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Cache;

interface DriverInterface
{
    /**
     * @param ProviderInterface $provider
     * @return $this
     */
    public function setProvider(ProviderInterface $provider);

    /**
     * Retrieve data from memcache
     *
     * @param string $key
     */
    public function get($key);

    /**
     * Saves data in cache
     *
     * @param string $key
     * @param mixed $data
     * @param integer $ttl
     * @return boolean
     */
    public function set($key, $data, $ttl = 3600);

    /**
     * Delete a key from memcache
     *
     * @param string $key
     * @return boolean
     */
    public function delete($key);

    /**
     * Get a provider's interface, if available
     *
     * @return ProviderInterface
     */
    public function getProvider();

    /**
     * Do a cache request
     *
     * @param mixed $request
     * @return mixed
     */
    public function execute($request);

}