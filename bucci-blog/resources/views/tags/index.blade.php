

@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| dashboard | Tags')



<div class="d-flex flex-column" id="content-wrapper">

    <div id="content">

        @include('adminpages.partials.usernavbar')
        <button type="button" class="btn btn-primary  btn-sm m-3" data-toggle="modal" data-target="#myModal">
            Create  Tags
        </button>
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')


                <div class="modal" id="myModal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header ">
                                <h4 class="modal-title">New Tags</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{route('tags.store')}}" method="post" enctype= "multipart/form-data" >
                                    @csrf

                                    <div class="row">
                                        <div class="col-xs-4 col-sm-4 col-md-8">
                                            <div class="form-group">
                                                <strong>Tags</strong>
                                                <input type="text" name="name" class="form-control" placeholder="create new categories">

                                            </div>

                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-8 ">
                                            <button type="submit" class="btn btn-primary">Create New Tags</button>
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
                            <th>tags</th>

                        </tr>
                        @foreach($tags as $tag)
                            <tr>



                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>




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

