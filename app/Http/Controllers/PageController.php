<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        return "Arya Chandra Kusuma 2241720228";
    }

    public function articles($id){
        return "Halaman artikel dengan ID ". $id;
    }
}
