<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class PagesController extends Controller
{
   public function index(){

        $products = Product::orderBy('created_at','DESC')->take(6)->get();
        
       return view('welcome', compact('products'));
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


   public function terms(){
    return view('terms');

   }

   public function policy(){
    return view('policy');

   }

   public function about(){
    return view('about');

   }


}