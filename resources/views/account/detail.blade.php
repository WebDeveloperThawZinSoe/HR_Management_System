@extends('layouts.app')

@section('nav')
@include("layouts.nav")

@endsection



@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include("layouts.flash_message")
            
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"> {{ $users->name }}  </h5>
                    <p class="card-text">
                        <b>Email : </b> {{ $users->email }} <br>
                        <b>Phone : </b> {{ $users->phone }} <br>
                        <b>Department : </b> {{ $users->depertment->name }} <br>
                        <b>Birthday : </b> {{ $users->birthday }} <br>
                        <b>Gender : </b> {{ $users->gender }} <br>
                        <b>Present : </b> <?php if($users->is_present == 1){
                            ?>
                                Present
                            <?php
                        }else{
                            ?>
                                Out Of Work
                            <?php
                        } ?>
                        <br>
                        <b>Address : </b>  {{ $users->address }}

                    </p>
                    <a href="/accounts/show" type="button" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection