<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiPlanet extends Controller
{
 public function index(){
    return view('index');
 }
 public function about(){
   return view('about-us');
}
public function contact(){
   return view('contact-us');
}
public function gallery(){
   return view('gallery');

}
public function resources(){
   return view('resources');

}
public function sales(){
   return view('sales');
}
public function services(){
   return view('services');
}
}
