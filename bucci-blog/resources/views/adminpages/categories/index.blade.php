

@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| dashboard | users')

@include('adminpages.partials.navbar')

<div class="d-flex flex-column" id="content-wrapper">

    <div id="content">

        @include('adminpages.partials.usernavbar')
        <button type="button" class="btn btn-primary  btn-sm" data-toggle="modal" data-target="#myModal">
            Create  Categories
        </button>
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')


                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Creat header Post</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{route('categories.store')}}" method="post" enctype= "multipart/form-data" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-8">
                                            <div class="form-group">
                                                <strong>cateories</strong>
                                                <input type="text" name="name" class="form-control" placeholder="title">

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>



                        </div>
                    </div>


                </div>


                <div class="col-12">
                    <table class="table table-bordered table-responsive-lg">
                        <tr>
                            <th>#</th>
                            <th>categories</th>

                        </tr>
                        @foreach($categories as $category)
                            <tr>



                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>




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

