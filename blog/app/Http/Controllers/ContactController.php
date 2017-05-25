<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\ContactRepository;
use App\Http\Requests\CreateContact;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    private $arrayNotCorp=['gmail.com','hotmail.com','yahoo.com','yahoo.com.br','osite.com.br','oglobo.com.br','uol.com.br','live.com.br'];
    
    /**
     * Armazena no banco de dados as informacoes do lead.
     *
     * @param  Request  $request, ContactRepository $contactRepository
     * @return View
     */
    public function postContact(CreateContact $request,ContactRepository $contactRepository)
    {
        $data=$request->all();
        $data['email']=strtolower($data['email']);
        unset($data['_token']);
        $data['tipo_usuario']=$this->analisaTipoUsuario($data['email']);
        $data['created_at']=date('Y-m-d H:i:s');
        $result=$contactRepository->storeContact($data);
        if($result==true)
        {
            session(['id_usuario'=>$result["id"]]);
            \Session::flash('result','Cadastro criado com sucesso');
            if(session('conteudo')===null)
            {
                return redirect('/');
            }

            return redirect(session('conteudo'));
        }
        \Session::flash('result','Houve um problema com seu cadastro.');
        return view('formulario');
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
