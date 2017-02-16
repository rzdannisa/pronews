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
                          <a href="#">Home</a> <i class="fa fa-angle-right"></i> Result
                          @if (count($hasil))
                              <div class="page-title">News</b></div>
                          @else
                              <div class="page-title">There is no result from : <b>{{$query}}</b></div>
                          @endif
                      </div>
                  </div>
              </div>


              <div class="row">
                  <div class="col l12 col m12 col s12">

                    <div class="z-depth-1">
                      <!-- Horizontal News Box -->
                      @foreach($hasil as $data)
                      <div class="news horizontal">
                        <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                            <img class="responsive-img" src="{{url('headline_news/'.$data->headline_news)}}" alt="news Image">
                          </div>
                        </div>
                        <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                              <i class="fa fa-clock-o"></i>
                              <?php
                                $date = strtotime($data->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> {{$data->news_title}} </a></div>
                            <div class="news-content"><p>{{$data->news_desc}}</p></div>
                          </div>
                        </div>
                      </div>
                      <br>
                      @endforeach
                    </div>

                  </div>
              </div>
              {!! $hasil->render() !!}
          </div>
      </div>

@include('footer')
@endsection
