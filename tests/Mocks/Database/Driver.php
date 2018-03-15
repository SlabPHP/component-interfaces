<?php
/**
 * Mock Driver
 *
 * @package Slab
 * @subpackage Tests
 * @author Eric
 */
namespace Slab\Tests\Components\Mocks;

class Driver implements \Slab\Components\Database\DriverInterface
{
    /**
     * Run an SQL query
     *
     * @param string $sql
     * @param string[] $binders
     * @param string $suggestedClass
     * @param bool $debug
     *
     * @return mixed
     */
    public function query($sql, $binders = array(), $suggestedClass = null, $debug = false)
    {

    }

    /**
     * Insert data
     *
     * @param string $table
     * @param string[] $data
     *
     * @return mixed
     */
    public function insert($table, $data)
    {

    }

    /**
     * Delete data
     *
     * @param string $table
     * @param string $where
     * @param string $whereValue
     *
     * @return mixed
     */
    public function delete($table, $where, $whereValue)
    {

    }

    /**
     * Update data
     *
     * @param string $table
     * @param array $data
     * @param string $where
     * @param int|null $limit
     *
     * @return mixed
     */
    public function update($table, $data, $where, $limit = null)
    {

    }

    /**
     * Escape a string
     *
     * @param string $input
     * @param boolean $tableComponent
     *
     * @return string
     */
    public function escape($input, $tableComponent = false)
    {

    }
}