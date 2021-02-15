@extends('layouts.app')
@section('title', '| contact ')
@section('content')
<div class="container contact-us">
  <h2 class="text-center">Contact Us</h2>
  <form>
   <div class="row justify-content-center">
     <div class="col-md-4 p-2">
       <input type="text" class="form-control" placeholder="First name">
     </div>
   </div>
   <div class="row justify-content-center">
       <div class="col-md-4 p-2">
         <input type="text" class="form-control" placeholder="email">
       </div>
     </div>
     <div class="row justify-content-center">
       <div class="col-md-4 p-2">
         <input type="text" class="form-control" placeholder="Phone number">
       </div>
     </div>
     <div class="row justify-content-center">
       <div class="col-md-4 p-2">
         <textarea name="" id="" cols="47" rows="5"  placeholder="type your message"></textarea>
       </div>
     </div>
 </form>
</div>
@endsection

 