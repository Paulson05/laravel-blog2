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
                      <div class="col-md-8">
                              <h1 class="text-center">{{ $post->title }} </h1>
                              <p>{{ $post->body }}</p>
                      </div>
              </div>
 </div>
    </div>
    </div>
</div>

@endsection

