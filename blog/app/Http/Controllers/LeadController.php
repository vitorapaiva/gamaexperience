<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\LeadBlogRepository;
use App\Http\Requests\CreateLead;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
    private $arrayNotCorp=['gmail.com','hotmail.com','yahoo.com','yahoo.com.br','osite.com.br'];
    /**
     * Pagina inicial e form de criacao de lead.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Armazena no banco de dados as informacoes do lead.
     *
     * @param  Request  $request
     * @return Response
     */
    public function postLead(CreateLead $request,LeadBlogRepository $leadRepository)
    {
        $data=$request->all();
        unset($data['_token']);
        $data['tipo_usuario']=$this->analisaTipoUsuario($data['email']);
        $data['created_at']=date('Y-m-d H:i:s');
        $result=$leadRepository->storeLead($data);
        if($result==true)
        {
            \Session::flash('result','Cadastro criado com sucesso');
            return view('index');
        }
        \Session::flash('result','Houve um problema com seu cadastro.');
        return view('index');
    }

    private function analisaTipoUsuario($email)
    {
        $arrayEmail=explode('@',$email);
        if(is_array($arrayEmail))
        {
            if(in_array($arrayEmail[1],$this->arrayNotCorp))
            {
                return 'B2C';
            }
            return 'B2B';
        }
        return 'Email invalido';
    }


}
