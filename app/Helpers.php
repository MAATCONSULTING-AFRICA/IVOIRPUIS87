<?php

use App\Models\Post;
use App\Models\Service;

function getServices(){
    $services = Service::get();
    return $services;
}
function getBlogs(){
    $recent_blogs = Post::limit(3)->get();
    return $recent_blogs;
}
if (!function_exists('getServiceById')) {
    function getServiceById($id)
    {
        return Service::find($id);
    }
}