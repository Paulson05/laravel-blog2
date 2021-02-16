





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
           <h1 class="text-center">Mainpost</h1>
 
               <div class="col-3">
                 </div> <div class="d-sm-flex justify-content-between align-items-center mb-4">
               
               
              <table class="table table-bordered table-responsive-lg">
                  <tr>
                      <th>News HEADING</th>
                      <th>News</th>
                      <th>READ MORE</th>

                  </tr>
                  {{--  @foreach ($posts as $post)  --}}
                      <tr>

                          <td></td>
                          <td></td>
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
               {{--  @endforeach  --}}
              </table>






                    </div>
                  </div>
                </div>
@endsection
 