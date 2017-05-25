<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\SurveyRepository;
use App\Http\Requests\SaveSurvey;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    private $arrayNotCorp=['gmail.com','hotmail.com','yahoo.com','yahoo.com.br','osite.com.br','oglobo.com.br','uol.com.br','live.com.br'];
    /**
     * Pagina inicial e form de criacao de lead.
     *
     * @return View
     */
    public function index()
    {
        return view('pesquisa');
    }

    /**
     * Armazena no banco de dados as informacoes do lead.
     *
     * @param  Request  $request, LeadBlogRepository $leadRepository
     * @return View
     */
    public function postSurvey(SaveSurvey $request,SurveyRepository $surveyRepository)
    {
        $data=$request->all();
        $data['email']=strtolower($data['email']);
        unset($data['_token']);
        $data['tipo_usuario']=$this->analisaTipoUsuario($data['email']);
        $data['created_at']=date('Y-m-d H:i:s');
        $data['cep']='00000000';
        $data['telefone']='00000000';
        $result=$surveyRepository->storeSurvey($data);
        if($result==true)
        {
            session(['id_usuario'=>$result["id"]]);
            \Session::flash('result','Cadastro criado com sucesso');
            return redirect('/');
        }
        \Session::flash('result','Houve um problema com seu cadastro.');
        return view('pesquisa');
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
