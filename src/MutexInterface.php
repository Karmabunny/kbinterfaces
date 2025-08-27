<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2025 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * A locking mechanism.
 *
 * @package karmabunny\interfaces
 */
interface MutexInterface
{

    /**
     * Acquire the lock.
     *
     * Return true if the lock is acquired, false if it is already held.
     *
     * @param int $timeout
     * @return bool
     */
    public function acquire(int $timeout = 0): bool;

    /**
     * Release the lock.
     *
     * Returns true on success, false if the lock is already released.
     *
     * @return bool
     */
    public function release(): bool;
}
