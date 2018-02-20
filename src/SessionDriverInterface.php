<?php
/**
 * Session Driver Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components;

interface SessionDriverInterface
{
    /**
     * Get a session variable
     *
     * @param $variable
     * @return mixed
     */
    public function get($variable);

    /**
     * Set a session variable
     *
     * @param $variable
     * @param $value
     * @return mixed
     */
    public function set($variable, $value);

    /**
     * Delete a session variable
     *
     * @param $variable
     * @return mixed
     */
    public function delete($variable);

    /**
     * Destroy a session
     *
     * @return mixed
     */
    public function destroy();

    /**
     * Start a session
     *
     * @return mixed
     */
    public function start();

    /**
     * Commit session data
     *
     * @return mixed
     */
    public function commit();
}