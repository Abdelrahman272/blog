<?php

use App\Models\Blog;



if (!function_exists('getBlog')){
    function getBlog()
    {
        return Blog::get();
    }
}
