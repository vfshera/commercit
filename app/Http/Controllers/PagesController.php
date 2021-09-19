<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function index(){
       return view('welcome');
   }

   public function featured(){
       $products = getProducts();
       
       return view('collections' , compact('products'));
   }




}
