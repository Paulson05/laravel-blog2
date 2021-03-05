@extends('layouts.app')
@section('title', '| register ')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mt-5">Register</h2>
        <form action="{{route('auth.postregister')}}" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                    @error('name')
                    <span class="form-text text-danger">{{$errors->first('name')}}</span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                    <span class="form-text text-danger">{{$errors->first('email')}}</span>
                    @enderror
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="password" name="password" class="form-control" placeholder="password">
                    @error('password')
                    <span class="form-text text-danger">{{$errors->first('password')}}</span>
                    @enderror
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

