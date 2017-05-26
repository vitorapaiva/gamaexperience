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
        return view('criseviajar');
    }

    public function mostraDemocratizacaoRealizarSonho()
    {
        session(['conteudo'=>'/democratizacao/realizar-sonho-em-tempo-de-crise']);
        return view('realizarsonho');
    }

    public function mostraDemocratizacaoTipoEmprestimo()
    {
        session(['conteudo'=>'/democratizacao/tipo-emprestimo']);
        return view('emprestimo');
    }

    public function mostraCincoPassos()
    {
        session(['conteudo'=>'/negocios/5-passos-para-abrir-seu-negocio']);
        return view('5passos');
    }

    public function mostraSonhoCasamentoCrise()
    {
        session(['conteudo'=>'/sonho/como-realizar-casamento-sem-crise']);
        return view('casamentosemcrise');
    }


}
