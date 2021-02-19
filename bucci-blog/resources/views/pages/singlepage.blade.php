@extends('layouts.app')
@section('title', "|$post->title")


@section('content')
<div class="row">
    <div class="col-md-8">
          <h2>{{$post->title}}</h2>
        <h2>{{$post->body}}</h2>
    </div>

</div>

@endsection

