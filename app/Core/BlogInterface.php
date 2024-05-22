<?php
namespace App\Core;

interface BlogInterface {
    public function getAllBlogs();
    public function singleBlog($slug);
}