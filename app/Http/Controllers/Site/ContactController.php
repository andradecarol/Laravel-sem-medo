<?php

namespace App\Http\Controllers\Site;


    
use App\Http\Controllers\Controller;
use App\Models\Contact as ModelsContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site\contact\index');
    }

   public function form(Request $request)  //Método responsável pela lógica do contato
   {
       $contact = ModelsContact::create($request ->all());       
       ddd($contact);
   } 
}