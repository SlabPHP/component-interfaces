<?php
/**
 * Provider Response Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Database;

interface ResponseInterface
{
    /**
     * @param $queryResult
     * @param $rowsAffected
     * @param $error
     * @param $suggestedClass
     * @return mixed
     */
    public function initializeFromQueryResults($queryResult, $rowsAffected, $error, $suggestedClass);

    /**
     * @return integer
     */
    public function count();

    /**
     * @return mixed
     */
    public function result();

    /**
     * @return mixed
     */
    public function row();
}