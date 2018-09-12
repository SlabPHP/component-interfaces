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
        if (empty($this->config)) {
            $this->config = new Configuration([]);
        }

        return $this->config;
    }

    /**
     * @param \Slab\Components\ConfigurationManagerInterface $config
     * @return $this
     */
    public function injectConfigurationMock(\Slab\Components\ConfigurationManagerInterface $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @return null
     */
    public function session()
    {
        if (empty($this->session)) {
            $this->session = new Session([]);
        }

        return $this->session;
    }

    /**
     * @param \Slab\Components\SessionDriverInterface $session
     * @return $this
     */
    public function injectSessionMock(\Slab\Components\SessionDriverInterface $session)
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
     * @param \Psr\Log\LoggerInterface $log
     * @return $this
     */
    public function injectLogMock(\Psr\Log\LoggerInterface $log)
    {
        $this->log = $log;

        return $this;
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
     * @param \Slab\Components\InputManagerInterface $input
     * @return $this
     */
    public function injectInputMock(\Slab\Components\InputManagerInterface $input)
    {
        $this->input = $input;

        return $this;
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
     * @param \Slab\Components\Router\RouterInterface $router
     * @return $this
     */
    public function injectRouterMock(\Slab\Components\Router\RouterInterface $router)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * @return null
     */
    public function db()
    {
        return $this->db;
    }

    /**
     * @param \Slab\Components\Database\DriverInterface $db
     * @return $this
     */
    public function injectDatabaseMock(\Slab\Components\Database\DriverInterface $db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * @return null
     */
    public function cache()
    {
        return $this->cache;
    }

    /**
     * @param \Slab\Components\Cache\DriverInterface $cache
     * @return $this
     */
    public function injectCacheMock(\Slab\Components\Cache\DriverInterface $cache)
    {
        $this->cache = $cache;

        return $this;
    }

    /**
     * @return null|\Slab\Components\BundleStackInterface
     */
    public function stack()
    {
        if (empty($this->stack)) {
            $this->stack = new BundleStack();
            $this->stack->pushBundle(new Bundle(__DIR__));
        }

        return $this->stack;
    }

    /**
     * @param \Slab\Components\BundleStackInterface $stack
     * @return $this
     */
    public function injectBundleStackMock(\Slab\Components\BundleStackInterface $stack)
    {
        $this->stack = $stack;

        return $this;
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