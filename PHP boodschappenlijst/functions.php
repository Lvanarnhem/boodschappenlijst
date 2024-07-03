<?php

function urlIs($url) {
    if ($url === $_SERVER['REQUEST_URI']) {
        return true;
    }
    else {
        return false;
    }
}

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}
