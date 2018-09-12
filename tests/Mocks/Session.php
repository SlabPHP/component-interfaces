<?php
/**
 * Session Driver Mock
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class Session implements \Slab\Components\SessionDriverInterface
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * Session constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get a session variable
     *
     * @param $variable
     * @return mixed
     */
    public function get($variable)
    {
        return $this->data[$variable];
    }

    /**
     * Set a session variable
     *
     * @param $variable
     * @param $value
     * @return mixed
     */
    public function set($variable, $value)
    {
        $this->data[$variable] = $value;

        return null;
    }

    /**
     * Delete a session variable
     *
     * @param $variable
     * @return mixed
     */
    public function delete($variable)
    {
        unset($this->data[$variable]);

        return null;
    }

    /**
     * Destroy a session
     *
     * @return mixed
     */
    public function destroy()
    {
        unset($this->data);

        return null;
    }

    /**
     * Start a session
     *
     * @return mixed
     */
    public function start()
    {
        $this->data = [];

        return null;
    }

    /**
     * Commit session data
     *
     * @return mixed
     */
    public function commit()
    {
        return null;
    }
}