<?php
/**
 * @link      https://github.com/Karmabunny
 * @copyright Copyright (c) 2022 Karmabunny
 */

namespace karmabunny\interfaces;

/**
 * A queue for processing jobs.
 *
 * @package karmabunny\interfaces
 */
interface QueueInterface
{

    /**
     * Push a job onto the queue.
     *
     * Options provide queue-specific configurations such as tags, priority,
     * reserve time, delays, retries, etc.
     *
     * @param JobInterface $job
     * @param array $options
     * @return string an unique identifier for the job within the queue
     */
    public function push(JobInterface $job, array $options = []): string;


    /**
     * Get the next job from the queue.
     *
     * This is a blocking operation unless the timeout is negative.
     *
     * @param int $timeout wait for a job, in seconds
     *   - negative: return immediately
     *   - zero: block indefinitely
     *   - positive: wait for the given number of seconds
     * @return JobInterface|null the next job in the queue, otherwise null if empty
     */
    public function pop(int $timeout = 0): ?JobInterface;

}
