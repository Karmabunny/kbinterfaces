<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class has logging capabilities.
 *
 * @package karmabunny\interfaces
 */
interface LoggableInterface
{

    /**
     * Log something.
     *
     * @param mixed $message string, array, exception - whatever
     * @param int $level
     * @param string|null $_category
     * @param int|float|null $_timestamp
     * @return void
     */
    public function log($message, ?int $level = null, ?string $_category = null, $_timestamp = null);
}
