<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\LeadBlogRepository;
use App\Http\Requests\CreateLead;
use App\Http\Controllers\Controller;

class LeadController extends Controller
{
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
        $data=$request-all();
        $result=$leadRepository->storeLead($data);
        if($result==true)
        {
            \Session::flash('result','Cadastro criado com sucesso');
            return view('index');
        }
        \Session::flash('result','Houve um problema com seu cadastro.');
        return view('index');
    }


}
