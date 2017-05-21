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
            $query=$this->model->insert($data);
            return ["result"=>true];
        } catch (Exception $e) {
           return ["result"=>false];
        }
    }
}
