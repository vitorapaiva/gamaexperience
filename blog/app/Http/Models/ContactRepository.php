<?php

namespace App\Http\Models;

use App\Http\Models\Contact;

class ContactRepository 
{
    private $model;

    public function __construct(Contact $model)
    {
        $this->model=$model;
    }

    public function storeContact($data)
    {
        try {
            $id=$this->model->insertGetId($data);
            return ["result"=>true,"id"=>$id];
        } catch (Exception $e) {
           return ["result"=>false];
        }
    }
}
