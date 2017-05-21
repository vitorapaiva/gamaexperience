<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class LeadBlog extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leadBlog';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    						'nome', 
    						'email', 
    						'ip_usuario', 
    						'tipo_usuario',
    						'created_at',
    						'updated_at'];
}
