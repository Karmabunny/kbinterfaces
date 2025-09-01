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
     * If the timeout is zero, the method always returns immediately
     * regardless if the lock is acquired or not.
     *
     * Given a positive timeout, the method will wait for the previous lock
     * to release before acquiring or giving up.
     *
     * @param float $timeout in seconds
     * @return bool
     */
    public function acquire(float $timeout = 0): bool;

    /**
     * Release the lock.
     *
     * Returns true on success, false if the lock is already released.
     *
     * @return bool
     */
    public function release(): bool;
}
