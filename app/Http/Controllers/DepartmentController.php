<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
     //accounts/show
     public function index(){
        
        $departments = Department::orderBy("id","DESC")->get();
        
        return view("department.index",[
            "departments" => $departments,
        ]);
    }

    //accounts/create
    public function create(){
        return view("department.create");
    }

    //create_data 
    public function filled_data(Request $request){
        $validator = validator(request()->all(),[
            'name' => ['required', 'string', 'max:255', 'unique:departments'],
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        Department::create([
            "name" => $request->name,
        ]);

        return redirect("/department/show")->with('success',"Department created successfully!  ");
    }

    //delete 
    public function delete($id){
        Department::find($id)->delete();
        return redirect("/department/show")->with('success',"Department Delete successfully!  ");
    }

    //edit
    public function edit($id){
       $data = Department::find($id);
       return view("/department/edit",[
            "data" => $data,
       ]);    
    }

    //upgrate
    public function upgrade(Request $request,$id){
        $validator = validator(request()->all(),[
            'name' => ['required', 'string', 'max:255', 'unique:departments'],
        ]);

        if($validator->fails()){
            return back()->withErrors($validator);
        }

        $affected = DB::table('departments')
        ->where('id', $request->id)
        ->update(['name' => $request->name]);

        return redirect("/department/show")->with('success','Category Update successfully!');
    }
}
