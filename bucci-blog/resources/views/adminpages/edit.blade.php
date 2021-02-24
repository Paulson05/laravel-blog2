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
                    <form action="{{route('posts.update', ['post'=>$post->id])}}" method="POST">
                        @method('PUT')
                        @include('adminpages.partials.alert')
                        <div class="row ">
                            <div class="col-8" >
                                @csrf
                                <div class="form-group">
                                                    <strong>Title</strong>
                                                    <input type="text" name="title" class="form-control" value="{{ $post->title}}">
                                </div>
                                <div class="form-group">
                                    <strong>Slug</strong>
                                    <input type="text" name="slug" class="form-control" value="{{ $post->slug}}">
                                </div>
                                <div class="form-group">
                                    <strong>categories</strong>
                                    <select name="category_id" class="form-control @error('category_id'){{'is-invalid'}}@enderror custom-select">
                                        <option>--- Select an Option ---</option>
                                        @foreach($categories as $category)
                                            <option @if($category->id==$post->category_id){{"selected"}}@endif value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="form-text text-danger">{{$errors->first('category_id')}}</span>
                                    @enderror
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
                                    <dd>{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                                </dl>
                                <hr>
                                <div class="row">
                                    <a href="{{route('posts.index')}}" class="btn btn-success" >
                                        <i>cancel</i>
                                    </a>
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

