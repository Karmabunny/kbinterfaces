<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class is a validator.
 *
 * @package karmabunny\interfaces
 */
interface ValidatorInterface
{

    /**
     * Perform validations.
     *
     * @return bool true if valid, false otherwise
     */
    public function validate(): bool;


    /**
     * Does this object have validation errors?
     *
     * @return bool
     */
    public function hasErrors(): bool;


    /**
     * Get valdiation errors.
     *
     * These should be populated when calling `validate()`.
     *
     * @return array<string,array> [ item => [errors] ]
     */
    public function getErrors(): array;
}
