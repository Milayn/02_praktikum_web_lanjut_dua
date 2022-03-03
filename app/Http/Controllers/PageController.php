<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Mila Yunita<br> 2041720027';
    }
    
    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}


