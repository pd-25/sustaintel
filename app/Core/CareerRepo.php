<?php
namespace App\Core;

use App\Models\JobPost;

 class CareerRepo implements CareerInterface {
    public function getAllJobs(){
        return JobPost::orderByDesc('id')->get();
    }

    public function getJob($slug){
        return JobPost::where('slug', $slug)->first();
    }
 }