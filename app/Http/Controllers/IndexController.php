<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;


class IndexController extends Controller
{
    public function about(){
        $all = About::all();

        return view('')->with(compact('all'));
    }
}
