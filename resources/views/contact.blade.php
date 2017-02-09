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
                          <div class="contact-detail center-align">
                              <div class="title">Get In touch</div>
                              <p>Yeah, Accessories is Greate and this the fun part. we'd to talkabout your project or just chat <br> about Accessories. So either fill out the form, pick up the phone.   </p>
                          </div>
                          <div class="map">
                              <div class="map-overlay" onclick="style.pointerEvents='none'"></div>
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9206.470266256896!2d-2.24382800000001!3d54.769110450000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487c4cb4ad874c0f%3A0xb297a2570358b172!2sLanehead%2C+Bishop+Auckland%2C+County+Durham+DL13%2C+UK!5e0!3m2!1sen!2sin!4v1436158557311" allowfullscreen></iframe>
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
                          <div class="detail">
                              <div class="title">Let's have a chat</div>
                              <div class="border"></div>
                              <p>Telephone : 518-457-5181<br>
                              Fax : 518-457-5191</p>
                              <a href="javascript:void(0);">hello@hezzy.org</a>
                          </div>
                      </div>
                  </div>
                  <div class="col l4 col m6 col s12">
                      <div class="contact-box z-depth-1">
                          <div class="icon">
                              <i class="mdi-communication-location-on"></i>
                          </div>
                          <div class="detail">
                              <div class="title">Visit our location</div>
                              <div class="border"></div>
                              <p>228 park ave  S #NNNNNN <br>New york, NY 10003-1502</p>
                              <a href="javascript:void(0);">Get Direction</a>
                          </div>
                      </div>
                  </div>
                  <div class="col l4 col m6 col s12 offset-m3">
                      <div class="contact-box z-depth-1">
                          <div class="icon">
                              <i class="mdi-action-wallet-travel"></i>
                          </div>
                          <div class="detail">
                              <div class="title">Looking for a career?</div>
                              <div class="border"></div>
                              <p>Quisque ruturm. Aenean <br> imperdiet. Etiam ultricies <br> nisi vel augue.</p>
                              <a href="javascript:void(0);">career@yoursite.com</a>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>

@include('footer')
@endsection