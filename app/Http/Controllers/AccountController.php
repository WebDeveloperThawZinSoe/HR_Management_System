<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //accounts/show
    public function index(){
        return view("account.index");
    }

    //accounts/create
    public function create(){
        return view("account.create");
    }
}
