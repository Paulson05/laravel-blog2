@extends('layouts.app')
@section('title', '| login ')
@section('content')
    <div class="container m-5">
        <h2 class="text-center">Login</h2>
        <form action ="{{route('auth.postLogIn')}}" method="POST" class="m-5" >
        @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="email" class="form-control" name = "email" placeholder="Email">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="password" name="password" class="form-control" placeholder="password">
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-md-2 p-2">
                   remember me <input type="checkbox">
                    <button class="btn btn-success">submit</button>
                </div>

            </div>

        </form>
    </div>
@endsection

