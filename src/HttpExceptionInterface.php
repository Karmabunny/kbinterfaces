<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2023 Karmabunny
 */

namespace karmabunny\interfaces;

use Throwable;

/**
 * These are errors that can inform the status code.
 *
 * @package karmabunny\interfaces
 */
interface HttpExceptionInterface extends Throwable
{

    /**
     * The HTTP status code, as recommended by the emitter.
     *
     * @return int
     */
    public function getStatusCode(): int;
}
