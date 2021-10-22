<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //accounts/show
    public function index(){
        $users = User::latest()->get();
        return view("account.index",[
            "users" => $users,
        ]);
    }

    //accounts/create
    public function create(){
        return view("account.create");
    }
}
