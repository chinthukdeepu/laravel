<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller{
    
/*
 * function for loading single user details
 * @param id - user id
 * @return voide
 */
   public function show($id){
       return view('user.profile',array('id'=>$id));
   } 
}
