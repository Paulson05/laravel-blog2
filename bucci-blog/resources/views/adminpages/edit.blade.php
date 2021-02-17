@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show')

@include('adminpages.partials.navbar')

<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        @include('adminpages.partials.usernavbar')
        <div id="page-top">
            <div id="wrapper">





                <div class="container-fluid">
                    <form action="{{route('admin.update', ['id'=>$post->id])}}" method="POST">
                        @include('adminpages.partials.alert')
                        <div class="row ">
                            <div class="col-8" >
                                @csrf
                                <div class="form-group">
                                                    <strong>Title</strong>
                                                    <input type="text" name="title" class="form-control" value="{{ $post->title}}">
                                                </div>
                                <div class="form-group">
                                        <strong>Body:</strong>
                                        <textarea class="form-control" style="height:150px" name="body"
                                        >{{ $post->body}}</textarea>
                                    </div>
                            </div>
                            <div class="col-4" >
                                <dl class="">
                                    <dt>Created AT:</dt>
                                    <dd>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                                </dl>
                                <dl class="">
                                    <dt> Last Updated AT:</dt>
                                    <dd>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <button class="btn btn-success" >
                                        <i>cancle</i>
                                    </button>
                                    <div class="col-8 ">
                                        <button type="submit" class="btn btn-danger" >
                                            <i >save changes</i>
                                        </button>
                                    </div>
                </div>
                             </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection

