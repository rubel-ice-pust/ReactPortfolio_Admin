<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformationModel;


class InformationController extends Controller
{
    function onSelectInformation(){
        $result = InformationModel::all();
        return $result;
    }
}
