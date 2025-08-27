<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2022 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This extends the `Configurable` interface to include an `init()` method
 * to perform initialization of properties.
 *
 * Consider it like a constructor but doesn't enforce arguments.
 *
 * More importantly, the init() method can be called after all objects have
 * been created. So inter-object dependencies don't require a careful
 * ordering of creation.
 *
 * @package karmabunny\interfaces
 */
interface ConfigurableInitInterface extends ConfigurableInterface
{
    /**
     * Initialize the object.
     *
     * @return void
     */
    public function init(): void;
}
