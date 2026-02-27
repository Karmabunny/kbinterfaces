<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class can validate.
 *
 * @package karmabunny\interfaces
 */
interface ValidatesInterface
{

    /**
     * Perform validation.
     *
     * This should throw an exception if validation fails.
     *
     * @return void
     */
    public function validate(?string $scenario = null): void;

}
