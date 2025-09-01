<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2023 Karmabunny
 */

namespace karmabunny\interfaces;

use Throwable;

/**
 * Validation errors.
 *
 * @package karmabunny\interfaces
 */
interface ValidationExceptionInterface extends Throwable
{

    /**
     * Get the validation errors.
     *
     * @return array [ item => [errors] ]
     */
    public function getErrors(): array;
}
