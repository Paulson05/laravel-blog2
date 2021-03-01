





@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show post')



<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')
                <button type="button" class="btn btn-primary  m-5" data-toggle="modal" data-target="#myModal">
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
                        <form action="{{route('posts.store')}}" method="post" enctype= "multipart/form-data" >
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Title</strong>
                                        <input type="text" name="title" class="form-control" placeholder="title">
{{--                                        <span class="text-danger form-text">--}}
{{--                                            @if($errors->has('title'))--}}
{{--                                                {{ $errors->first('title') }}--}}
{{--                                            @endif--}}
{{--                                        </span>--}}
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Slug</strong>
                                        <input type="text" name="slug" class="form-control" placeholder="slug">

                                    </div>

                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Category:</strong>
                                       <select class="form-control" name="category_id">

                                           @foreach($categories as $category)
                                               <option value="{{$category->id}}">{{$category->name}}</option>
                                           @endforeach
                                       </select>
                                    </div>
                                    </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">


                                        <div class="form-group">
                                            <label><strong>Tags:</strong></label><br>
                                            <select name="name[]" id="cars" multiple class="form-control custom-select">
                                           @foreach($tags as $tag)


                                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                            @endforeach
                                            </select>

                                        </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Body:</strong>
                                        <textarea class="form-control"  name="body" value="body"
                                        ></textarea>
{{--                                       <span class="text-danger form-text">--}}
{{--                                            @if($errors->has('body'))--}}
{{--                                               {{ $errors->first('body') }}--}}
{{--                                           @endif--}}
{{--                                       </span>--}}
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
                    <th>CRUD</th>
                </tr>
                @foreach ($posts as $post)
                    <tr>

                        <td>{{Substr($post->title, 0, 15)}}</td>
                        <td>{{Substr($post->body, 0, 40)}}</td>
                        <td>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</td>


                        <td>


                            <a href="{{ route('posts.show', ['post'=>$post->id])}}" title="show">
                                <i class="btn btn-danger fas fa-eye"></i>
                            </a>
                            <a href="{{ route('posts.edit',['post' => $post->id]) }}" >
                                <i class="btn btn-danger fas fa-edit" ></i>
                            </a>
                            <form style="display: inline-block" method="post" action="{{ route('posts.destroy',['post' => $post->id]) }}" >
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
             {!!$posts->links();!!}
    </div>
    </div>
</div>


@endsection

