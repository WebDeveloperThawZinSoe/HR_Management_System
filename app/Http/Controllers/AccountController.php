<?php

namespace App\Http\Controllers;

use App\Department;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    //accounts/show
    public function index()
    {
        $users = User::latest()->get();
        return view("account.index", [
            "users" => $users,
        ]);
    }

    //accounts/create
    public function create()
    {
        $department = Department::all();
        return view("account.create", [
            "departments" => $department,
        ]);
    }

    //make_data
    public function make_data(Request $request)
    {
        $validator = validator(request()->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'unique:users'],
            'employ_id' => ['required', 'unique:users'],
            'dob' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
            'department' => ['required'],
            'presen' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }


        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" =>  Hash::make($request->password),
            "phone" => $request->phone,
            "employ_id" => $request->employ_id,
            "birthday" => $request->dob,
            "gender" => $request->gender,
            "address" => $request->address,
            "deperment_id" => $request->department,
            "is_present" => $request->presen,
        ]);
        return redirect("/accounts/create")->with('success', "Account created successfully!  ");
    }

    public function delete($id)
    {
        User::find($id)->delete();
        return redirect("/accounts/show")->with('success', "Account Delete successfully!  ");
    }

    public function update($id)
    {
        $department = Department::all();
        $data = User::find($id);
        return view("account.edit", [
            "data" => $data,
            "departments" => $department,
        ]);
    }

    public function upgrade(Request $request)
    {
        $validator = validator(request()->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', ],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required'],
            'employ_id' => ['required'],
            'dob' => ['required'],
            'gender' => ['required'],
            'address' => ['required'],
            'department' => ['required'],
            'presen' => ['required'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $affected = DB::table('users')
            ->where('id', $request->id)
            ->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" =>  Hash::make($request->password),
                "phone" => $request->phone,
                "employ_id" => $request->employ_id,
                "birthday" => $request->dob,
                "gender" => $request->gender,
                "address" => $request->address,
                "deperment_id" => $request->department,
                "is_present" => $request->presen,
            ]);

        return redirect("/accounts/show")->with('success', 'Account Update successfully!');
    }

    public function detail($id){
       $user = User::find($id);
       return view("account.detail",[
            "users" => $user
       ]);
    }
}
