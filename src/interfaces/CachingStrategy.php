<?php

namespace eznio\toggler\interfaces;


interface CachingStrategy
{
    public function exists($key);
    public function get($key);
    public function load(...$params);
}
