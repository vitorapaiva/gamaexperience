<?php

namespace App\Http\Models;

use App\Http\Models\LeadBlog;

class LeadBlogRepository 
{
    private $model;

    public function __construct(LeadBlog $model)
    {
        $this->model=$model;
    }

    public function storeLead($data)
    {
        try {
            $id=$this->model->insertGetId($data);
            return ["result"=>true,"id"=>$id];
        } catch (Exception $e) {
           return ["result"=>false];
        }
    }
}
