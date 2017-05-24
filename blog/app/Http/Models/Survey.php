<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model 
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'survey';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
        protected $fillable = [ 'nome',
                            'email',
                            'data_nascimento',
                            'cep',
                            'situacao_profissional',
                            'telefone',
                            'como_ajudaria',
                            'utiliza_credito',
                            'sonho_proprio',
                            'bem_proprio',
                            'ip_usuario',
                            'tipo_usuario',
                            'created_at',
                            'updated_at'];
}
