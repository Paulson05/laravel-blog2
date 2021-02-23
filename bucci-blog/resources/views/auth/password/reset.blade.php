@extends('layouts.app')
@section('title', '| forget password ')
@section('content')
    <div class="container ">
        <h2 class="text-center">Reset password</h2>
        <form action ="{{route('auth.resetformtokenchange',['email'=>$email])}}" method="POST" class="m-5" >
            @csrf
            <div class="row justify-content-center">

                <div class="row justify-content-center">
                    <div class="col-md-4 p-2">
                        <label>password</label>
                        <input type="password" class="form-control" name = "password" placeholder="Enter password">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 p-2">
                        <label>password_ confirm</label>
                        <input type="password" class="form-control" name = "confirm_password" placeholder="Confirm new password">
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-4">

                    <button class="btn btn-success btn-sm">Reset password</button>
                </div>

            </div>

        </form>
    </div>
@endsection

