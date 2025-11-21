<?php

use Illuminate\Support\Str;

if (!function_exists('str_slug')) {
    function str_slug($string, $separator = '-')
    {
        return Str::slug($string, $separator);
    }
}
