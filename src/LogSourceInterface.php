<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class can emit logs.
 *
 * @package karmabunny\interfaces
 */
interface LogSourceInterface
{

    /**
     * Register a logger.
     *
     * @param callable|LogSinkInterface $logger (message, level, category, timestamp)
     * @return int
     */
    public function addLogger($logger): int;
}
