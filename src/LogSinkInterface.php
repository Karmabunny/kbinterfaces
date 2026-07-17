<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class can receive logs.
 *
 * @package karmabunny\interfaces
 */
interface LogSinkInterface
{

    /**
     * Log something.
     *
     * @param mixed $message string, array, exception - whatever
     * @param int|null $level
     * @param string|null $category
     * @param float|null $timestamp
     * @return void
     */
    public function log(mixed $message, ?int $level = null, ?string $category = null, float|null $timestamp = null): void;
}
