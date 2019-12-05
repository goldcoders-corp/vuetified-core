<?php

if (!function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * This is a polyfill for the missing shorthand function in lumen.
     *
     * @param  string   $path
     * @return string
     */
    function config_path($path = '')
        : string {
        return app()->basePath('config').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}
