@extends('adminpages.layout.dashboard')
@section('content')


<div id="page-top">
  <div id="wrapper">
      @include('adminpages.partials.navbar')

      <div class="d-flex flex-column" id="content-wrapper">
          <div id="content">
              @include('adminpages.partials.usernavbar')
          <div class="container-fluid">
             <div class="row">

                 </div> <div class="d-sm-flex justify-content-between align-items-center mb-4">

                  <!-- Button to Open the Modal -->
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Create  POST
                  </button>


               </div>

             </div>

              <!-- The Modal -->
              <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title">Creat header Post</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                      <form action="{{route('admin.post')}}" method="POST" enctype= "multipart/form-data" >
                          @csrf

                          <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                      <strong>Title</strong>
                                      <input type="text" name="title" class="form-control" placeholder="title">
                                      <div class="text-center">
                                          @if($errors->has('title'))
                                              {{ $errors->first() }}
                                          @endif
                                      </div>
                                  </div>

                              </div>


                              <div class="col-xs-12 col-sm-12 col-md-12">
                                  <div class="form-group">
                                      <strong>Body:</strong>
                                      <textarea class="form-control" style="height:150px" name="body"
                                          ></textarea>
                                  </div>
                                  <div class="text-center">
                                      @if($errors->has('body'))
                                          {{ $errors->first() }}
                                      @endif
                                  </div>
                              </div>

                              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                  <button type="submit" class="btn btn-primary">Post</button>
                              </div>
                          </div>

                      </form>
                    </div>



                  </div>
                </div>
              </div>



              <table class="table table-bordered table-responsive-lg">
                  <tr>
                      <th>News HEADING</th>
                      <th>News</th>
                      <th>READ MORE</th>

                  </tr>
                    @foreach ($posts as $post)
                      <tr>

                          <td>{{$post->title}}</td>
                          <td>{{$post->body}}</td>
                          <td></td>


                          <td>


                                  <a href="" title="show">
                                      <i class="btn btn-danger fas fa-eye"></i>
                                  </a>
                                  <a href="" >
                                      <i class="btn btn-danger fas fa-edit" ></i>
                                  </a>
                                  <a href="" >
                                      <i class="btn btn-danger fas fa-trash-alt" ></i>
                                  </a>


                          </td>

                      </tr>
                 @endforeach
              </table>






                    </div>
                  </div>
                </div>

@endsection

