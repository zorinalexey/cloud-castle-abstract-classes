<?php

namespace CloudCastle\AbstractClasses;

abstract class Singleton
{
    private static array $instance = [];

    public static function getInstance(): static
    {
        return self::$instance[static::class] ?? (self::$instance[static::class] = new static());
    }

    final protected function __construct()
    {
    }

    final protected function __clone()
    {
    }
}