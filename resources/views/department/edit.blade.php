@extends('layouts.app')

@section('nav')
@include("layouts.nav")

@endsection



@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <form method="post" autocomplete="off">
                @include("layouts.flash_message")
                <!-- 2 column grid layout with text inputs for the first and last names -->
                @csrf

                <!-- Text input -->


                <input name="id" type="hidden" value=" {{$data->id}} ">
                <div class="form-outline mb-4">
                    <input value="{{$data->name}}" name="name" type="text" id="form6Example3" class="form-control" value="" />
                    <label class="form-label" for="form6Example3">Department name</label>
                </div>




                <!-- Submit button -->
                <button type="submit" class="btn btn-warning btn-block mb-4">
                    Upgrate Department </button>
            </form>

        </div>
    </div>
</div>
@endsection