<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    
    /**
     * Retorna post relativo ao nome da funcao
     *
     * @return View
     */
    public function mostraCriseSePudesse()
    {
        session(['conteudo'=>'/sonho/e-se-mesmo-com-a-crise-voce-pudesse-viajar']);
        if(session('id_usuario')!==NULL)
        {
            return view('criseviajar');
        }
        return redirect()->route('formulario');
    }

    public function mostraDemocratizacaoRealizarSonho()
    {
        session(['conteudo'=>'/democratizacao/realizar-sonho-em-tempo-de-crise']);
        if(session('id_usuario')!==NULL)
        {
            return view('realizarsonho');
        }
        return redirect()->route('formulario');
    }

    public function mostraDemocratizacaoTipoEmprestimo()
    {
        session(['conteudo'=>'/democratizacao/tipo-emprestimo']);
        if(session('id_usuario')!==NULL)
        {
            return view('emprestimo');
        }
        return redirect()->route('formulario');
    }

    public function mostraCincoPassos()
    {
        session(['conteudo'=>'/negocios/5-passos-para-abrir-seu-negocio']);
        if(session('id_usuario')!==NULL)
        {
            return view('5passos');
        }
        return redirect()->route('formulario');
    }


}
