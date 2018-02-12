<?php
/**
 * SlabPHP Cache Driver Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface CacheDriverInterface
{
    /**
     * Constructor stores a provider instance
     *
     * @param string $provider
     */
    public function __construct($provider);

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
     * @return mixed
     */
    public function getInterface();

    /**
     * Do a cache request
     *
     * @param mixed $request
     * @return mixed
     */
    public function execute($request);

}