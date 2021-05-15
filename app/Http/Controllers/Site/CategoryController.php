<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site\category\index');
    }    
    

    /**
     * Display the specified resource.
     *
     * @param  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        return view('site\category\show', ['slug' => $slug]);
        //quando o usuario digitar a categoria produtos/teclado (exemplo), 
        //passando pela rota, que passa pelo controller, que chama o model, que faz a consulta no bd,
        //retornando os produtos, os produtos passarão pela view 'show' e aparecerá na tela
    }
}
    
