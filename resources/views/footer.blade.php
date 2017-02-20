<!-- Footer -->
      <footer class="page-footer">
          <div class="container">
              <div class="row">
                  <div class="col l12 col m12 col s12">
                      <!-- Footer Button -->
                      <!-- <div class="footer-button center-align">
                          <span class="mdi-action-history"></span>
                      </div> -->
                  </div>

                  <div class="col l6 col m12 col s12" style="padding-top : 30px;">
                      <!-- Footer Column 1 -->
                      @foreach($menu as $menuu)
                      <ul class="col l4 col m4 col s4">
                          <li class="footer-title">{{$menuu->name}}</li>
                          @foreach($menuu->subtypeee as $sub)
                          <?php
                                $subname = strtolower($sub->name);
                                $typenews = strtolower($menuu->name);
                              ?>
                          <li>
                              <a href="{{url('home/'.$typenews.'/'.$subname)}}">{{$sub->name}}</a>
                          </li>
                          @endforeach
                      </ul>
                      @endforeach
                  </div>
                  <div class="col l6 col m12 col s12" style="padding-top : 30px;">

                    @forelse($medads1 as $ma1)
                    <div class="z-depth-1">
                      <!-- Horizontal News Box -->
                      <div class="news horizontal">
                          <div class="col l4 col m4 col s12 no-padding">
                              <!-- Horizontal News Image -->
                              <div class="news-image">
                                  <img class="responsive-img" src="{{url('for_image/'.$ma1->for_image)}}" alt="news Image">
                              </div>
                          </div>
                          <div class="col l8 col m8 col s12 no-padding">
                              <!-- Horizontal News Description -->
                              <div style="padding-top : 50px;" class="news-description">
                                <div class="news-title"><a> {{$ma1->title}} </a></div>
                              </div>
                          </div>
                      </div>
                    </div>

                    @empty
                    <div class="z-depth-1">
                      <!-- Horizontal News Box -->
                      <div class="news horizontal">
                          <div class="col l4 col m4 col s12 no-padding">
                              <!-- Horizontal News Image -->
                              <div class="news-image">
                                  <img class="responsive-img" src="{{url('assets/images/medium-ads.png')}}" alt="news Image">
                              </div>
                          </div>
                          <div class="col l8 col m8 col s12 no-padding">
                              <!-- Horizontal News Description -->
                              <div style="padding-top : 50px;" class="news-description">
                                <div class="news-title"><a> Place your Ads here.. </a></div>
                              </div>
                          </div>
                      </div>
                      <!-- Horizontal News Box -->
                      <div class="news horizontal">
                        <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div style="padding-top : 50px;" class="news-description">
                              <div class="news-title"><a> Place your Ads here.. </a></div>
                          </div>
                        </div>
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- Horizontal News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="{{url('assets/images/medium-ads.png')}}" alt="news Image">
                            </div>
                        </div>
                      </div>
                    </div>
                    @endforelse
                  </div>
              </div>
              <!-- Footer Logo -->
              <div class="logo">
                  <a href="{{url('/')}}"><img style="border-radius:5px;" src="{{url('assets/images/material-logo.png')}}" alt="Logo"></a>
              </div>
          </div>
          <!-- Footer Bottom -->
          <div class="footer-copyright">
              <div class="container">
                  <div class="row">
                  <!-- Copyright Text -->
                  <div class="col l4 col m12 col s12">
                      &copy; Copyright 2017 CPLUSNEWS by JICOS & Devcolin
                  </div>
                  <div class="col l4 col m12 col s12">
                      <!-- Social Icon -->
                      <div style="text-align : center;"; class="social-icon">
                          <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-instagram"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-youtube"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                          <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                      </div>
                  </div>
                  <div class="col l4 col m12 col s12">
                      <!-- Footer Menu -->
                      <div class="footer-menu">
                          <ul>
                              <li>
                                  <a href="{{url('/')}}">Home</a>
                              </li>
                              <li>
                                  <a href="{{url('about')}}">About</a>
                              </li>
                              <li>
                                  <a href="{{url('contact')}}">Contact us</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </footer>
