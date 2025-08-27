<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This object can be explicitly converted to an array with a `toArray()` method.
 *
 * @package karmabunny\interfaces
 */
interface ArrayableInterface
{
    /**
     * Convert this object to an array.
     *
     * @return array
     */
    public function toArray(): array;
}
