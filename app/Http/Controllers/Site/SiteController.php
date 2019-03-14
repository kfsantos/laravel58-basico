<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return '<h1>Home Page</h1>';
    }

    public function contato(){
        return '<h1>Contatos</h1>';
    }

    public function categorias($id){
        return "<h1>Listagem de Categorias: {$id}</h1>";
    }
}
