<?php

function check_home_page(){
    $currentURL = $_SERVER['REQUEST_URI'];
    $path = parse_url($currentURL, PHP_URL_PATH);

    if ($path === '/' || $path === '/testsite/') {
        return true;
    } else {
        return false;
    }
}

function get_home_page(){
    return '/testsite/';
}