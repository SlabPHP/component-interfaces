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
        $log = new Mocks\Log();
        $input = new Mocks\Input();
        $bundle = new Mocks\Bundle([]);

        $router = new Mocks\Router\Router();
        $route = new Mocks\Router\Route();
        $controller = new Mocks\Router\Controller();

        $databaseDriver = new Mocks\Database\Driver();
        $databaseProvider = new Mocks\Database\Provider();
        $databaseResponse = new Mocks\Database\Response();

        $cacheDriver = new Mocks\Cache\Driver('provider');
    }
}