<?php
/**
 * Verify mocks tests
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components;

class VerifyMocksTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Just test that the mocks exist and implement all the required interface methods
     */
    public function testMockCreations()
    {
        $system = new Mocks\System();
        $this->assertNotEmpty($system);

        $log = new Mocks\Log();
        $this->assertNotEmpty($log);

        $input = new Mocks\Input();
        $this->assertNotEmpty($input);

        $bundle = new Mocks\Bundle([]);
        $this->assertNotEmpty($bundle);

        $bundleStack = new Mocks\BundleStack();
        $this->assertNotEmpty($bundleStack);

        $router = new Mocks\Router\Router();
        $this->assertNotEmpty($router);

        $route = new Mocks\Router\Route();
        $this->assertNotEmpty($route);

        $controller = new Mocks\Router\Controller();
        $this->assertNotEmpty($controller);

        $databaseDriver = new Mocks\Database\Driver();
        $this->assertNotEmpty($databaseDriver);

        $databaseProvider = new Mocks\Database\Provider();
        $this->assertNotEmpty($databaseProvider);

        $databaseResponse = new Mocks\Database\Response();
        $this->assertNotEmpty($databaseResponse);

        $cacheDriver = new Mocks\Cache\Driver('provider');
        $this->assertNotEmpty($cacheDriver);
    }
}