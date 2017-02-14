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
                          <a href="#">Home</a> <i class="fa fa-angle-right"></i> Contact
                          <div class="page-title"> Contact </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col l12 col m12 col s12">
                      <div class="contact style-2 z-depth-1">
                        @foreach(@$cabout as $c)
                          <div class="contact-detail center-align">
                              <div class="title">{{$c->title}}</div>
                              <p>{{$c->desc}}</p>
                          </div>
                        @endforeach
                          <div class="map">
                              <div class="map-overlay" onclick="style.pointerEvents='none'"></div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253840.48865806547!2d106.68943009781505!3d-6.229726425708153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x100c5e82dd4b820!2sDKI+Jakarta!5e0!3m2!1sid!2sid!4v1487094556704"></iframe>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col l4 col m6 col s12">
                      <div class="contact-box z-depth-1">
                          <div class="icon">
                              <i class="mdi-communication-forum"></i>
                          </div>
                          @foreach($contact as $cc)
                          <div class="detail">
                              <div class="title">{{$cc->title}}</div>
                              <div class="border"></div>
                              <p style="max-width: 260px">Telephone : {{$cc->contact_1}}<br>
                              Fax : {{$cc->contact_2}}</p>
                              <?php
                                echo '<a href="'.$cc->link_url.'" target="_blank">'.$cc->link_name.'</a>';
                              ?>
                          </div>
                          @endforeach
                      </div>
                  </div>
                  <div class="col l4 col m6 col s12">
                      <div class="contact-box z-depth-1">
                          <div class="icon">
                              <i class="mdi-communication-location-on"></i>
                          </div>
                          @foreach($cloc as $loc)
                          <div class="detail">
                              <div class="title">{{$loc->title}}</div>
                              <div class="border"></div>
                              <p style="max-width: 260px">{{ $loc->address }}</p>
                              <?php
                                echo '<a href="'.$loc->link_url.'" target="_blank">'.$loc->link_name.'</a>';
                              ?>
                          </div>
                          @endforeach
                      </div>
                  </div>
                  <div class="col l4 col m6 col s12 offset-m3">
                      <div class="contact-box z-depth-1">
                          <div class="icon">
                              <i class="mdi-action-wallet-travel"></i>
                          </div>
                          @foreach($career as $car)
                          <div class="detail">
                              <div class="title">{{$car->title}}</div>
                              <div class="border"></div>
                              <p style="max-width: 260px">{{$car->desc}}</p>
                              <?php
                                echo '<a href="'.$car->link_url.'" target="_blank">'.$car->link_name.'</a>';
                              ?>
                          </div>
                          @endforeach
                      </div>
                  </div>
              </div>

          </div>
      </div>

@include('footer')
@endsection
