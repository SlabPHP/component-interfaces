<?php
/**
 * System Mock
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class System implements \Slab\Components\SystemInterface
{
    /**
     * @var null
     */
    private $config = null;

    /**
     * @var null
     */
    private $session = null;

    /**
     * @var null
     */
    private $log = null;

    /**
     * @var null
     */
    private $input = null;

    /**
     * @var null
     */
    private $router = null;

    /**
     * @var null
     */
    private $db = null;

    /**
     * @var null
     */
    private $cache = null;

    /**
     * @var null
     */
    private $stack = null;

    /**
     * @var null
     */
    private $debug = null;

    /**
     * @return null
     */
    public function config()
    {
        return $this->config;
    }

    /**
     * @return null
     */
    public function session()
    {
        return $this->session;
    }

    /**
     * @param Session $session
     * @return $this
     */
    public function injectSessionMock(Session $session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * @return null
     */
    public function log()
    {
        if (empty($this->log)) {
            $this->log = new Log();
        }

        return $this->log;
    }

    /**
     * @return null
     */
    public function input()
    {
        if (empty($this->input)) {
            $this->input = new Input();
        }

        return $this->input;
    }

    /**
     * @return null
     */
    public function router()
    {
        if (empty($this->router)) {
            $this->router = new Router\Router();
        }

        return $this->router;
    }

    /**
     * @return null
     */
    public function db()
    {
        return $this->db;
    }

    /**
     * @return null
     */
    public function cache()
    {
        return $this->cache;
    }

    /**
     * @return null|\Slab\Components\BundleStackInterface
     */
    public function stack()
    {
        if (empty($this->stack)) {
            $this->stack = new BundleStack(new Bundle(__DIR__));
        }

        return $this->stack;
    }

    /**
     * @return bool
     */
    public function routeRequest()
    {
        return true;
    }

    /**
     * @return null|\Slab\Components\Debug\ManagerInterface
     */
    public function debug()
    {
        return $this->debug;
    }
}