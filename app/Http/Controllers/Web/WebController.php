<?php

namespace PauloCoelho\Http\Controllers\Web;

use Illuminate\Http\Request;
use PauloCoelho\Http\Controllers\Controller;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render('Advogado Paulo Coelho | Página Inicial', 'descrição', 'https://google.com', '', '');
        return view('web.home', [
            'head' => $head
        ]);
    }

    public function about()
    {
        $head = $this->seo->render('Advogado Paulo Coelho | Sobre', 'descrição', 'https://google.com', '', '');
        return view('web.about', [
            'head' => $head
        ]);
    }

    public function contact()
    {
        $head = $this->seo->render('Advogado Paulo Coelho | Contato', 'descrição', 'https://google.com', '', '');
        return view('web.contact', [
            'head' => $head
        ]);
    }
}
