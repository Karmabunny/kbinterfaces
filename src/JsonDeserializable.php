<?php

namespace karmabunny\interfaces;

/**
 * An object that can be deserialized from a JSON array.
 *
 * @package karmabunny\interfaces
 */
interface JsonDeserializable
{

    /**
     * Create an object from a JSON array.
     *
     * @param array $json
     * @return static
     */
    public static function fromJson(array $json): static;
}
