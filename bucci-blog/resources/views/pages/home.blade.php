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
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, reiciendis molestiae laborum ut, aliquid repellendus porro atque odio nobis, magnam dolorem ipsa sed provident molestias culpa recusandae veritatis reprehenderit iure.</P>
            <button class="btn btn-primary ">latest post</button>
        </div>
       </div>
     </div>
   </div>
</div>

  <div class="container">
      <div class="row">
          <div class="col-8">
              <div class="col-md-12">
                  <h2>post Title</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rerum accusamus architecto blanditiis, eum sunt, ducimus tempora mollitia minima provident ad dignissimos. Id rem amet sapiente. Facere inventore ea vero.</p>
                  <a href="">read more</a>
              </div>
              <div class="col-md-12">

               @foreach ($posts as $post)
                      <h2>{{$post->title}}</h2>
                      <p>{{$post->body}}</p>
                      <a href="">read more</a>
                  @endforeach
              </div>

          </div>

           <div class="col-4">
               <div class="col-12">
                   <h4 class="text-center">side bar</h4>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam rerum accusamus architecto blanditiis, eum sunt, ducimus tempora mollitia minima provident ad dignissimos. Id rem amet sapiente. Facere inventore ea vero.</p>

               </div>
           </div>

      </div>



  </div>
@endsection
