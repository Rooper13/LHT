<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Beranda extends Controller
{
    function index (){

        $data['title'] = "Beranda";

        return
        view('templates.header',$data). 
        view('beranda',$data).
        view('templates.footer');
    }

    function edukasi (){
        $data['title'] = "Edukasi";

        return
        view('templates.header',$data). 
        view('edukasi',$data).
        view('templates.footer');
    }

    function gangguan (){
        $data['title'] = "Edukasi";

        return
        view('templates.header',$data). 
        view('gangguan',$data).
        view('templates.footer');
    }
}
