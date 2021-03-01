

@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| dashboard | categories')


<div class="d-flex flex-column" id="content-wrapper">

    <div id="content">
          <h1 class="text-center">All Post</h1>
        @include('adminpages.partials.usernavbar')
        <button type="button" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
            Create  Categories
        </button>
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')


                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header ">
                                <h4 class="modal-title">New Categories</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{route('categories.store')}}" method="post" enctype= "multipart/form-data" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-8">
                                            <div class="form-group">
                                                <strong>Categories</strong>
                                                <input type="text" name="name" class="form-control" placeholder="create new categories">

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                                            <button type="submit" class="btn btn-primary">Create New Categories</button>
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

