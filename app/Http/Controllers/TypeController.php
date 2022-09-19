<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index($slug){

        return view('type_and_ings', [
           'slug'=> $slug
        ]);
    }
}
