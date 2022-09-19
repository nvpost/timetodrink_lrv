<?php

namespace App\Http\Controllers;

use App\Models\Coctails;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $coctails = Coctails::paginate(10);

//        dd($coctails);
        return view('home', [
            'coctails'=>$coctails
        ]);
    }
}
