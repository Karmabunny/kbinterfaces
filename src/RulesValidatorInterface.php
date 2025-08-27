<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This class is a validator that uses rules.
 *
 * @package karmabunny\interfaces
 */
interface RulesValidatorInterface extends ValidatorInterface
{

    /**
     *
     * @param array $rules
     * @return void
     */
    public function setRules(array $rules);
}
