<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTableModel;

   

class CourseController extends Controller
{
    function onSelectFourData(){
        $result = CourseTableModel::limit(4)->get();
        return $result;
    }

    Function onSelectAllData(){
        $result = CourseTableModel::all();
        return $result;
    }

    function onSelectDetails(Request $req){
        $id= $req->input('id');
        $result= CourseTableModel::where(['id'=>$id])->get();
        return $result;

    }
}
