@extends('layouts.app')
@section('title', '| contact ')
@section('content')
<div class="container contact-us">
  <h2 class="text-center">Contact Us</h2>
  <form action="{{route('pages.contact')}}" method="post">
      @csrf

   <div class="row justify-content-center">
       <div class="col-md-6 p-2">
         <input type="email" name="email" class="form-control" placeholder="email" @error('email'){{'is-invalid'}}@enderror>
           @error('email')
           <span class="form-text text-danger">{{$errors->first('email')}}</span>
           @enderror
       </div>
     </div>
     <div class="row justify-content-center">
       <div class="col-md-6 p-2">
         <input type="text" name="subject" class="form-control" placeholder="subject">
           @error('subject')
           <span class="form-text text-danger">{{$errors->first('subject')}}</span>
           @enderror
       </div>

     </div>
     <div class="row justify-content-center ml-5">
       <div class="col-md-6">
         <textarea name="bodymessage" id="" cols="60" rows="5"  placeholder="type your message"></textarea>
           @error('message')
           <span class="form-text text-danger">{{$errors->first('message')}}</span>
           @enderror
       </div>
         <div class="row justify-content-center">
             <div class="col-md-6 ">
                 <button type="submit" class="btn btn-danger" >
                     send email
                 </button>
             </div>
         </div>
     </div>

 </form>
</div>
@endsection

