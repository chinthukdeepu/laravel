<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
     * for loading home page
     * @param voide
     * @return voide
     */
    public function index(){
        $data = array('content'=>'Home page content');
        return view('home',$data);
    }
}
