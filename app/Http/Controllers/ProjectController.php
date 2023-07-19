<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;


class ProjectController extends Controller
{
    
     function onSelectThreeData(){
        $result = ProjectModel::limit(3)->get();
        return $result;
     }

     function onSelectAllData(){
        $result = ProjectModel::all();
        return $result;
     }

     function onSelectDetailsData(Request $req){
        $id = $req->input('id');
        $result = ProjectModel::where(['id'=>$id])->get();
        return $result;
     }

}
