<?php

if (! function_exists('file_raw_exists')) {
    /**
     *  Determine if a file or directory exists..
     *
     * @param  string  $path
     * @return bool
     */
    function file_raw_exists($file = '')
    {
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            return false;
        }
        else {
            return true;
        }
    }
}

if (! function_exists('svg')) {
    /**
     * SVG helper
     *
     * @param string $src Path to svg in the cp image directory
     * @return string
     */
    function svg($src)
    {
        return file_get_contents(public_path('assets/svg/' . $src . '.svg'));
    }
}

if (! function_exists('image')) {
    /**
     * image helper
     *
     * @param string $src Path to image in the cp image directory
     * @return string
     */
    function image($src, $ext = 'png')
    {
        return '<img src=\"' . public_path('/assets/img/' . $src . $ext) . '"/>';
    }
}


if (! function_exists('base_raw_path')) {
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * @return string
     */
    function base_raw_path($path = '')
    {
        return env('RAW_FILE_URL') . $path;
    }
}
