@extends('app')

@section('content')

@include('header')

<!-- Main Wrapper -->
      <div class="wrapper grey-background">
          <div class="container">
              <div class="row">
                  <div class="col l12 col m12 col s12 center-align">
                      <!-- Breadcrumb -->
                      <div class="breadcrumb">
                          <a href="#">Blogs</a> <i class="fa fa-angle-right"></i> About
                          <div class="page-title"> About </div>
                      </div>
                  </div>
              </div>
              @foreach($about as $abt)
              <div class="row">
                  <div class="col l12 col m12 col s12">
                      <div class="about z-depth-1">
                          <!-- About Image -->
                          <img alt="news Image" src="{{ url('header_about/'.$abt->header_about) }}" class="responsive-img">
                          <div class="col l8 offset-l2 col m12 col s12">
                              <!-- About Detail -->
                              {!! $abt->text_about !!}
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
            @endforeach

@include('footer')
@endsection