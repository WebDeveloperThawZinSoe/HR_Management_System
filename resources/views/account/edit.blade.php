@extends('layouts.app')

@section('nav')
@include("layouts.nav")

@endsection



@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
        @include("layouts.flash_message")
            <form action="/accounts/upgrade" method="post">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <input type="hidden" name='id' value="{{$data->id}}">
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input value="{{ $data->name }}" type="text" name="name" id="form6Example1" class="form-control" required />
                            <label class="form-label" for="form6Example1">Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input value="{{ $data->employ_id }}" type="text" name="employ_id" id="form6Example2" required class="form-control" />
                            <label class="form-label" for="form6Example2">Employ Id</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <input value="{{ $data->phone }}" type="number" name="phone" id="form6Example1" class="form-control" required />
                            <label class="form-label" for="form6Example1">Phone</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input value="{{ $data->email }}" type="email" name="email" id="form6Example2" class="form-control" required />
                            <label class="form-label" for="form6Example2">Email </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline ">
                            <input name="password" type="password" id="form6Example5" class="form-control" required />
                            <label class="form-label" for="form6Example5">Password</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <input value="{{ $data->birthday }}" name="dob" type="date" id="form6Example21" class="form-control" required />
                            <label class="form-label" for="form6Example21">Date of Birth </label>
                        </div>
                    </div>
                </div>


                <div class="row mb-4">
                    <div class="col">
                        <div class="">
                            <label class="" for="inlineFormSelectPref">Departments</label>
                            <select required name="department" class="select" style="width: 100%;height:40px;padding:0px;margin:0px">
                                @foreach($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label class="" for="inlineFormSelectPref">Gender</label>
                            <select required name="gender" class="select" style="width: 100%;height:40px;padding:0px;margin:0px">
                               <option value="male">Male</option>
                               <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="">
                            <label class="" for="inlineFormSelectPref">Present</label>
                            <select required name="presen" class="select" style="width: 100%;height:40px;padding:0px;margin:0px">
                               <option value="1">Present</option>
                               <option value="0">Out</option>
                            </select>
                        </div>
                    </div>
                </div>



                <!-- Number input -->

                <br>


                <!-- Message input -->
                <div class="form-outline mb-4">
                    <textarea name="address" class="form-control" id="form6Example7" rows="4" required> {{ $data->address }}</textarea>
                    <label class="form-label" for="form6Example7"> Address </label>
                </div>



                <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block mb-4">Upgrade Account</button>
            </form>

        </div>
    </div>
</div>
@endsection