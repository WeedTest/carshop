<?php

namespace App\Contracts;

interface MakeContract
{
    public static function make($config):self;
}
