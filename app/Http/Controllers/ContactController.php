<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactTableModel;


class ContactController extends Controller
{
    function onContactSend(Request $req){
      
      $name =  $req->input('name');
      $email =  $req->input('email');
      $msg =  $req->input('msg');
      $result =ContactTableModel::insert(['name'=>$name,'email'=>$email,'message'=>$msg]);

      if($result==true){
        return 1;
      }else{
        return 0;
      }
    }
    
}
