<?php
/**
 * SlabPHP Data source driver Interface
 *
 * @package SlabPHP
 * @subpackage Components
 * @author Eric
 */
namespace SlabPHP\Components;

interface DataSourceDriverInterface
{
    /**
     * Constructor with provider and options setting
     *
     * @param string $provider
     * @param array $configuration
     */
    public function __construct($provider, $configuration);

    /**
     * Returns if the database is initialized as a specific type
     *
     * @param string $type
     */
    public function isInitializedAs($type = null);

    /**
     * Run an SQL query
     *
     * @param string $sql
     * @param string[] $binders
     * @param string $suggestedClass
     *
     * @return mixed
     */
    public function query($sql, $binders = array(), $suggestedClass = null, $debug = false);

    /**
     * Insert data
     *
     * @param string $table
     * @param string[] $data
     *
     * @return mixed
     */
    public function insert($table, $data);

    /**
     * Delete data
     *
     * @param string $table
     * @param string $where
     *
     * @return mixed
     */
    public function delete($table, $where);

    /**
     * Update data
     *
     * @param string $table
     * @param array $data
     * @param string $where
     *
     * @return mixed
     */
    public function update($table, $data, $where, $limit = null);

    /**
     * Escape a string
     *
     * @param string $input
     * @param boolean $tableComponent
     *
     * @return string
     */
    public function escape($input, $tableComponent = false);


}