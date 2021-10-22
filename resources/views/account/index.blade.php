@extends('layouts.app')

@section('nav')
@include("layouts.nav")

@endsection



@section('content')


<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
    @include("layouts.flash_message")
      <table class="table align-middle">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Employ Id</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Department</th>
            <th scope="col">Is Prescent</th>
            <th scope="col" >Delete</th>
            <th scope="col" >Update</th>
            <th scope="col" >Info</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $k=>$user)
          <tr>
            <th scope="row">{{ ++$k }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->employ_id }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->depertment->name }}</td>
            <td>
              <?php
                  $status = $user->is_present;
                  if($status == 1){
                    ?>
<button type="button" class="btn btn-success btn-rounded">Present</button>
                    <?php
                  }else{
                    ?>
<button type="button" class="btn btn-dark btn-rounded">Out</button>
                    <?php
                  }
              ?>
            </td>
            <td >
              <a href="/accounts/{{ $user->id }}/delete" onclick="return confirm('Delete Account Confirm')" style="display: inline-block;" type="button" class="btn btn-danger btn-sm px-3">
                <i class="fas fa-times"></i>
              </a>
            </td>
            <td >
              <a href="/accounts/{{ $user->id }}/update" style="display: inline-block;" type="button" class="btn btn-warning btn-sm px-3">
              <i class="fas fa-exclamation-triangle"></i>
                </a>
            </td>
            <td>
              <a href="/accounts/{{ $user->id }}/detail" style="display: inline-block;" type="button" class="btn btn-info btn-sm px-3">
                <i class="fas fa-info"></i>
                </a>
            </td>
          </tr>
          @endforeach
          

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection