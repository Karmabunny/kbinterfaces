<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2022 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class is 'configurable' - it has an `update()` method that accepts iterables.
 *
 * @package karmabunny\interfaces
 */
interface ConfigurableInterface
{
    /**
     * Update the object with a new configuration.
     *
     * @param iterable $config
     * @return void
     */
    public function update($config): void;
}
