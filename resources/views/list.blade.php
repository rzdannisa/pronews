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
                      <?php
                      $type = ucwords(session('type'));
                      $subname = ucwords(session('subname'));
                      ?>
                          <a href="#">Home</a> <i class="fa fa-angle-right"></i> {{$type}}
                          <div class="page-title"> {{$subname}} </div>
                      </div>
                  </div>
              </div>


              <div class="row">
                  <div class="col l12 col m12 col s12">

                    <div class="z-depth-1">
                      <!-- Horizontal News Box -->
                      @foreach($cat as $cate)
                      <div class="news horizontal">
                        <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                            <img class="responsive-img" src="{{url('headline_news/'.$cate->headline_news)}}" alt="news Image">
                          </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                              <i class="fa fa-clock-o"></i> {{$cate->created_date}}
                            </div>
                            <div class="news-title"><a href="{{url('detail/'.$cate->slug)}}"> {{$cate->news_title}} </a></div>
                            <div class="news-content"><p>{{$cate->news_desc}}</p></div>
                          </div>
                        </div>
                      </div>
                      <br>
                      @endforeach
                    </div>

                  </div>
              </div>

          </div>
      </div>

@include('footer')
@endsection