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

    public function validate(): bool;

    public function hasErrors(): bool;

    public function getErrors(): array;
}
