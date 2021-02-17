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

                    <div class="container">



                        <div class="row ">
                            <div class="col-8" style="background: blue;">
                                <div class="col-md-8">
                                    <h1 class="text-center">{{ $post->title }} </h1>
                                    <p>{{ $post->body }}</p>
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
                                        <dd>{{date ('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                                    </dl>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a href=" {{route('admin.edit', ['id'=>$post->id])}}" >
                                                <i class="btn btn-danger fas fa-edit" ></i>
                                            </a>

                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.delete', ['id'=>$post->id])}}" >
                                                <i class="btn btn-danger fas fa-trash-alt" ></i>
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
</div>

@endsection

