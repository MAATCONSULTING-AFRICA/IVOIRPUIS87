<?php

use App\Models\Service;

function getServices(){
    $services = Service::get();
    return $services;
}
if (!function_exists('getServiceById')) {
    function getServiceById($id)
    {
        return Service::find($id);
    }
}