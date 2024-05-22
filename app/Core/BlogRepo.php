<?php
namespace App\Core;

use App\Models\Blog;

class BlogRepo implements BlogInterface {

    public function getAllBlogs() {
        return Blog::query()->orderByDesc('id');
    }

    public function singleBlog($slug){
        return Blog::where('slug', $slug)->first();
    }

}