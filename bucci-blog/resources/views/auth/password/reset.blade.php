@extends('layouts.app')
@section('title', '| forget password ')
@section('content')
    <div class="container ">
        <h2 class="text-center">Reset password</h2>
        <form action ="{{route('auth.reset')}}" method="POST" class="m-5" >
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-4 p-2">
                    <label>Email</label>
                    <input type="email" class="form-control" name = "$email" placeholder="Enter Email">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 p-2">
                        <label>password</label>
                        <input type="email" class="form-control" name = "email" placeholder="Enter password">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 p-2">
                        <label>password_ confirm</label>
                        <input type="email" class="form-control" name = "email" placeholder="Confirm new password">
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

