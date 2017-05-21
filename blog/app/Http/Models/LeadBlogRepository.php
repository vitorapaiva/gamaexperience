<?php

namespace App\Http\Models;

use App\Http\Models\LeadBlog;

private $model;

class LeadBlogRepository 
{
    public function __construct(LeadBlog $model)
    {
        $this->model=$model;
    }

    public function storeLead($data)
    {
        try {
            $query=$this->model->insert($data);
            return ["result"=>true,"id"=>$query->lead_id];
        } catch (Exception $e) {
           return ["result"=>false];
        }
    }
}
