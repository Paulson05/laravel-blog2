@extends('adminpages.layout.dashboard')
@section('content')

@section('title', '| show')



<div class="d-flex flex-column" id="content-wrapper">
    <div id="content">
        <h1> you are welcome</h1>

      send via : {{$bodymessage}}
        {{$email}}
        </div>
</div>
@endsection

