<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2020 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * A job. Could be a cron or a worker. You decide.
 *
 * @package karmabunny\interfaces
 */
interface JobInterface
{

    /**
     * A unique identifier.
     *
     * @return string
     */
    public function getId(): string;


    /**
     * Run the job.
     *
     * @return void
     */
    public function run();

}
