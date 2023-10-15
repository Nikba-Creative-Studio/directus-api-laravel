<?php

use Nikba\Directus\Laravel\Directus;

if (! function_exists('directus')) {
    function directus(?string $connection = null)
    {
        return resolve('directus', ['connection' => $connection]);
    }
}
