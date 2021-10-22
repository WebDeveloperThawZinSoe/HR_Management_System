@extends('layouts.app')

@section('nav')
@include("layouts.nav")

@endsection



@section('content')


<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      @include("layouts.flash_message")
      <table class="table align-middle">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
          @foreach($departments as $key=>$department)
            <tr>
              <th scope="row"> {{ ++$key }} </th>
              <td>{{ $department->name }}</td>
              <td>
                
                  <a onclick="return confirm('Delete Confirm')" href="/department/{{ $department->id }}/delete" class="btn btn-danger btn-sm px-3">
                    <i class="fas fa-times"></i>
                  </a>
                
              </td>
              <td>
                <a type="button" href="/department/{{ $department->id }}/edit" class="btn btn-warning btn-sm px-3">
                <i class="fas fa-exclamation-triangle"></i>
                </a>
              </td>
            </tr>
          @endforeach

         
        </tbody>
      </table>
      <a  href="/department/create" class="btn btn-outline-primary " data-mdb-ripple-color="dark"> Creatre  New Department </a>
    </div>
  </div>
</div>
@endsection