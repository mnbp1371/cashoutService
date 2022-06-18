<?php

if (!function_exists('filter_errors')) {
    function filter_errors($error, &$return = [])
    {
        foreach ($error as $key => $value) {
            if ($key === 'debug') {
                continue;
            }

            if (is_array($value)) {
                filter_errors($value, $return);
                continue;
            }

            $message = !is_numeric($key) ? trans($key) . ': ' : '';
            $return[] = $message . $value;
        }

        return $return;
    }
}
