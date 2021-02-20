@extends('layouts.app')
@section('title', '| register ')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mt-5">Register</h2>
        <form action="{{route('Auth.postLogin')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>

            </div>
          
            <div class="row justify-content-center">
                <div class="col-md-2 p-2">
                    <button class="btn btn-success">submit</button>
                </div>

            </div>

        </form>
    </div>
@endsection

