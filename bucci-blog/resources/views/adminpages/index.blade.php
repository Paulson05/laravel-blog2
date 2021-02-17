





@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show')

@include('adminpages.partials.navbar')

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Create  POST
                </button>


            </div>

        </div>

        <!-- The Modal -->
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
                        <form action="{{route('admin.post')}}" method="post" enctype= "multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" placeholder="title">

                                    </div>

                                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Body:</strong>
                                        <textarea class="form-control" style="height:150px" name="body"
                                        ></textarea>
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Post</button>
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
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>

                </tr>
                @foreach ($posts as $post)
                    <tr>

                        <td>{{Substr($post->title, 0, 15)}}</td>
                        <td>{{Substr($post->body, 0, 40)}}</td>
                        <td>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</td>


                        <td>


                            <a href="{{ route('admin.show', ['id'=>$post->id]) }}" title="show">
                                <i class="btn btn-danger fas fa-eye"></i>
                            </a>
                            <a href="" >
                                <i class="btn btn-danger fas fa-edit" ></i>
                            </a>
                            <a href="" >
                                <i class="btn btn-danger fas fa-trash-alt" ></i>
                            </a>


                        </td>

                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</div>

@endsection

