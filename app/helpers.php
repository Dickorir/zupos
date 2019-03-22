<?php

/**
 * @param string $option_key
 * @return string
 */


function get_option($option_key = ''){
    $get = \App\Option::where('option_key', $option_key)->first();
    if($get) {
        return $get->option_value;
    }
    return $option_key;

}

