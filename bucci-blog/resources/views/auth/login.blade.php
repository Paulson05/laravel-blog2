@extends('layouts.app')
@section('title', '| login ')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <form action ="{{route('auth.postLogIn')}}" method="POST" class="m-5" >
        @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <input type="email" class="form-control" name = "email" placeholder="Email">
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
                    <div class="col-md-4 p-2">
                        <a href="{{route('auth.resetform')}}" class="" style="text-decoration: none;">forget password</a>
                       remember me <input type="checkbox">
                        <button class="btn btn-success">submit</button>

                    </div>

            </div>

        </form>
    </div>
@endsection

