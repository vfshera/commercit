<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class PagesController extends Controller
{
   public function index(){
       return view('welcome');
   }

   public function categories(){
       $categories = Category::all();

       $cimages = [
           "/storage/images/categories/copypaper_300x.webp",
           "/storage/images/categories/binders_300x.webp",
           "/storage/images/categories/hp-ink_300x.webp",
           "/storage/images/categories/officechair_300x.webp",
           "/storage/images/categories/Pen_300x.webp",
           "/storage/images/categories/School_Supplies_300x.webp"
       ];
       
       return view('categories' , compact('categories','cimages'));
   }




}
