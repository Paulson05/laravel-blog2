@extends('layouts.app')
@section('title', '| home')
@section('content')
<div class="container m-5" style="color: red; background-color:yellow; height:400px; padding-top:100px;">
   <div class="row">
    <div class="col-md-12">
       <div class="container">
        <div class="jumbotron">
            <h1 class="text-center">
                welcome to Bucc! Blog
            </h1>
            @foreach ($post3 as $post)
                <h2>{{$post->title}}</h2>
                <p>{{Substr($post->body, 0, 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
            @endforeach

        </div>
       </div>
     </div>
   </div>
</div>

  <div class="container">
      <div class="row">
          <div class="col-8">
              <div class="col-md-12">
                  <h2  class="text-center m-2" style="background: rgb(73, 95, 143)" >latest News</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rerum accusamus architecto blanditiis, eum sunt, ducimus tempora mollitia minima provident ad dignissimos. Id rem amet sapiente. Facere inventore ea vero.</p>
                  <a , 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
              </div>
                   <div class="col-md-12">

                        @foreach ($posts as $post)
                            <h2>{{$post->title}}</h2>
                            <p>{{Substr($post->body, 0, 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                            <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
                        @endforeach
              </div>

          </div>

           <div class="col-4">
               <div class="col-12">
                   <h4 class="text-center m-2" style="background: red; color: wwhite">Local News</h4>
                   @foreach ($post2 as $post)
                       <h2>{{$post->title}}</h2>
                       <p>{{Substr($post->body, 0, 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                       <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
                   @endforeach
               </div>
               <div class="col-12">
                   <h4  class="text-center m-2" style="background: rgb(11, 192, 66)" >World News</h4>
                   @foreach ($post4 as $post)
                       <h2>{{$post->title}}</h2>
                       <p>{{Substr($post->body, 0, 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                       <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
                   @endforeach
               </div>
               <div class="col-12" >

                   <h4 class="text-center m-2" style="background: red" >Sport News</h4>
                   @foreach ($post4 as $post)
                       <h2>{{$post->title}}</h2>
                       <p>{{Substr($post->body, 0, 200)}} {{strlen($post->body) > 200 ? "...." : ""}}</p>
                       <a class="btn btn-success" href="{{ route('getSinglePost',['post'=>$post->slug])  }}">read more</a>
                   @endforeach
               </div>
           </div>

      </div>

{{--         <div class="text-center">--}}
{{--             {!!$posts->links();!!}--}}
{{--         </div>--}}

  </div>
@endsection
