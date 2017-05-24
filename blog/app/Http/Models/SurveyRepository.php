<?php

namespace App\Http\Models;

use App\Http\Models\Survey;

class SurveyRepository 
{
    private $model;

    public function __construct(Survey $model)
    {
        $this->model=$model;
    }

    public function storeSurvey($data)
    {
        try {
            $id=$this->model->insertGetId($data);
            return ["result"=>true,"id"=>$id];
        } catch (Exception $e) {
           return ["result"=>false];
        }
    }
}
