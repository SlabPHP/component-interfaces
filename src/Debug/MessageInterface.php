<?php
/**
 * Debug Message Interface
 *
 * @package Slab
 * @subpackage Components
 * @author Eric
 */
namespace Slab\Components\Debug;

interface MessageInterface
{
    /**
     * MessageInterface constructor.
     * @param $message
     * @param $context
     */
    public function __construct($message, $context);

    /**
     * @param $timestampRelative
     * @return mixed
     */
    public function getMessage($timestampRelative);
}