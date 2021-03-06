@extends('layouts.app')
@section('title', "|$post->title")


@section('content')
   <div class="container">
       <div class="row">
           <div class="container">
           <div class="col-md-8 justify-content-center">

                  <h2 class="text-center ">{{$post->title}}</h2>
                  <h2 class=" text-capitalize">{{$post->body}}</h2>
             <hr>
              category: <span class="btn btn-primary">{{optional($post->category)->name}}</span>
               <hr>
         Tag:
               @foreach($post->tags as $tag)
                   <span class="btn btn-success">{{($tag->name)}}</span>


               @endforeach


           </div>
           </div>
       </div>
       <hr>
       <div class="row">
           <div class="col-md-4 p-2">
                    <h3> <i class="fas fa-comment-alt m-2"></i> {{$post->comments->count()}}<span class="m-1">comments</span></h3>

                 @foreach($post->comments as $comment)
                     <div class="row">
                        <div>
                            <p><span class="m-2">Name:{{$comment->name}}</span> <span class="mt-5">{{date ('M j, Y h:ia', strtotime($comment->created_at))}}</span></p>


                        </div>
                         <span class="mt-3">  Comments: {{$comment->comments}}</span>
                         <hr>
                     </div>

               @endforeach

           </div>
       </div>
       <div class="row">
           <form action="{{route('comments.store',['comments'=>$post->id])}}" method="post">
               @csrf

               <div class="row justify-content-center">
                   <div class="col-md-4 p-2">
                       <input type="text" name="name" class="form-control" placeholder="name" @error('email'){{'is-invalid'}}@enderror>
                       @error('email')
                       <span class="form-text text-danger">{{$errors->first('email')}}</span>
                       @enderror
                   </div>

                       <div class="col-md-4 p-2">
                           <input type="email" name="email" class="form-control" placeholder="your email" @error('email'){{'is-invalid'}}@enderror>
                           @error('email')
                           <span class="form-text text-danger">{{$errors->first('email')}}</span>
                           @enderror
                       </div>


               </div>

               <div class="row justify-content-center ml-5">
                   <div class="col-md-8">
                       <textarea name="comments" id="" cols="82" rows="6"  placeholder="add your comment" class="form-control"></textarea>
                       @error('comments')
                       <span class="form-text text-danger">{{$errors->first('comments')}}</span>
                       @enderror
                   </div>
                   <div class="col-md-8 m-2">
                       <button type="submit" class="btn btn-danger" >
                           comment
                       </button>
                   </div>

               </div>

           </form>
       </div>
   </div>

@endsection

