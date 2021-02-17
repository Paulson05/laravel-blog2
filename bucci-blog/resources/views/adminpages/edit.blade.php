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


                <div class="row">
                    <div class="col-8">
                        <div class="col-md-8" >
                            <h1 class="text-center">{{ $post->title }} </h1>
                            <p>{{ $post->body }}</p>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <strong>Title</strong>
                                    <input type="text" name="title" class="form-control" value="{{ $post->title}}">
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Read more:</strong>
                                        <textarea class="form-control" style="height:150px" name="read_more" value="{{ $post->body}}"
                                        ></textarea>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="clo-md-4">
                            <dl class="dl-horizontal">
                                <dt>Created AT:</dt>
                                <dd>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt> Last Updated AT:</dt>
                                <dd>{{date ('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="" >
                                        <i class="btn btn-danger fas fa-edit" >cancel</i>
                                    </a>

                                </div>
                                <div class="col-md-6">
                                    <a href="" >
                                        <i class="btn btn-danger fas fa-trash-alt" >save changes</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

