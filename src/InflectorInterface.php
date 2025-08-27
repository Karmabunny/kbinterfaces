<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2022 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * Language inflection (in English) for pluralisation.
 *
 * Not for i18n.
 *
 * @package karmabunny\interfaces
 */
interface InflectorInterface extends ConfigurableInterface
{

    /**
     * Checks if a word is defined as uncountable.
     *
     * @param string $word
     * @return bool
     */
    public function uncountable(string $word): bool;


    /**
     * Makes a plural word singular.
     *
     * @param string $word
     * @param int $count number of things
     * @return string
     */
    public function singular(string $word, int $count = 1): string;


    /**
     * Makes a singular word plural.
     *
     * @param string $word
     * @param int $count
     * @return string
     */
    public function plural(string $word, int $count = 0): string;
}
