@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show')



<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <h1> you are welcome</h1>

      send via :{{$email}}
        </div>
    <div>
        {{$bodymessage}}
    </div>
</div>
@endsection

