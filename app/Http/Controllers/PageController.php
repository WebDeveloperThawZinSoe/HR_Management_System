<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // index 
    public function index(){
        return view("account.index");
    }


}
