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
                <div class="form-outline mb-4">
                    <input name="name" type="text" id="form6Example3" class="form-control" />
                    <label  class="form-label" for="form6Example3">Department name</label>
                </div>




                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                    Create Department </button>
            </form>

        </div>
    </div>
</div>
@endsection