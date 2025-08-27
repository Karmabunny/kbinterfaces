<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2021 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * A sortable object.
 *
 * @package karmabunny\interfaces
 */
interface SortableInterface
{

    /**
     * Compare this object to another.
     *
     * Ultimately this always ends up in `usort/uasort`, something like:
     *
     * ```
     * usort($items, fn($a, $b) => $a->compare($b));
     * ```
     *
     * The return type should be the same as the spaceship operator, that is:
     *
     * - `-1 $this < $other`  - first
     * - `0  $this == $other` - same
     * - `1  $this > $other`  - last
     *
     * If not comparable it's best to return `-1` to move the 'other' lower
     * down the list.
     *
     * Tip, combine comparisons like so:
     *
     * ```
     * return $this->group <=> $other->group ?: $this->name <=> $this->name;
     * ```
     *
     * @param mixed $other
     * @param string $mode
     * @return int
     */
    public function compare($other, string $mode = 'default'): int;
}
