<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeEtcModel;


class HomeEtcController extends Controller
{
    function onSelectVideo(){
        $result = HomeEtcModel::select('video_description','video_url')->get();
        return $result;
    }

    function onSelectProjectClient(){
        $result = HomeEtcModel::select('total_project','total_client')->get();
        return $result;
     }

     function onSelectTechDEsc(){
        $result = HomeEtcModel::select('tech_description')->get();
        return $result;
     }
     function onSelectHomeTopTitle(){
        $result = HomeEtcModel::select('home_title','home_subtitle')->get();
        return $result;
    }
}
