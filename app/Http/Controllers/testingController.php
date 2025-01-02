<?php

namespace App\Http\Controllers;
use   App\Models\members;
use   App\Models\groups;
use Illuminate\Http\Request;

class testingController extends Controller
{
    public function testing(){

        return  members::with("group")->get();

    }

    public function group(){

        return  groups::with('member')->get();

    }
}
