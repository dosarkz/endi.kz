<?php

if (! function_exists('active_url')) {
    function active_url($path, $class = 'active') {
        if(request()->getRequestUri() === $path)
        {
            return $class;
        };

        return false;
    }
}
