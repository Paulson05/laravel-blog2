





@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show post')

@include('adminpages.partials.navbar')

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">


                @include('adminpages.partials.alert')
               
{{--  


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
  --}}
userrrrr
@endsection

