<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * This is a rule for performing validation.
 *
 * @package karmabunny\interfaces
 */
interface RuleInterface
{

    /**
     * The shorthand name for this rule.
     *
     * @return string
     */
    public static function getName(): string;


    /**
     * Parse a ruleset.
     *
     * This typically specifies the fields to validate and any configurable options.
     *
     * Invalid rulesets should raise an exception.
     *
     * @param array $ruleset
     * @return void
     */
    public function parse(array $ruleset): void;


    /**
     * What fields are registered for this rule?
     *
     * @return string[]
     */
    public function fields(): array;


    /**
     * Validate data against this rule.
     *
     * This should throw an exception if validation fails.
     *
     * @param array|object $data
     * @return void
     */
    public function validate($data): void;
}
