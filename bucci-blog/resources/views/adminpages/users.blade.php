

@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| dashboard | users')

@include('adminpages.partials.navbar')

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')




        <div class="col-12">
            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Created AT</th>
                    <th>CRUD</th>
                </tr>
                @foreach($users as $user)
                    <tr>



                        <td>{{$user->email}}</td>
                        <td>{{Substr($user->password, 0, 20)}}</td>

                        <td>{{date('M j, Y h:ia',(strtotime($user->created_at)))}}</td>


                        <td>


                            <a href=" title="show">
                                <i class="btn btn-danger fas fa-eye"></i>
                            </a>
                            <a href="" >
                                <i class="btn btn-danger fas fa-edit" ></i>
                            </a>
                            <form style="display: inline-block" method="post" action="" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm p-0"><i class="btn btn-danger fas fa-trash-alt" ></i></button>
                            </form>


                        </td>

                    </tr>
                @endforeach
            </table>
            </div>
        </div>

    <div class="text-center">

    </div>
    </div>
</div>


@endsection

