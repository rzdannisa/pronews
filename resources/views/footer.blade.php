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
                          <li>
                              <a href="javascript:void(0);">{{$sub->name}}</a>
                          </li>
                          @endforeach
                      </ul>
                      @endforeach
                  </div>
                  <div class="col l6 col m12 col s12" style="padding-top : 30px;">
                    <div class="z-depth-1">
                      <!-- Horizontal News Box -->
                      <div class="news horizontal">
                          <div class="col l4 col m4 col s12 no-padding">
                              <!-- Horizontal News Image -->
                              <div class="news-image">
                                  <img class="responsive-img" src="{{url('assets/images/hor-news1.jpg')}}" alt="news Image">
                              </div>
                          </div>
                          <div class="col l8 col m8 col s12 no-padding">
                              <!-- Horizontal News Description -->
                              <div class="news-description">
                                <div class="news-time">
                                    <i class="fa fa-clock-o"></i> 9 min ago
                                </div>
                                <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                              </div>
                          </div>
                      </div>
                      <!-- Horizontal News Box -->
                      <div class="news horizontal">
                        <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                          </div>
                        </div>
                        <div class="col l4 col m4 col s12 no-padding">
                            <!-- Horizontal News Image -->
                            <div class="news-image">
                                <img class="responsive-img" src="{{url('assets/images/hor-news2.jpg')}}" alt="news Image">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <!-- Footer Logo -->
              <div class="logo">
                  <a href="{{url('/')}}"><img src="{{url('assets/images/material-logo.png')}}" alt="Logo"></a>
              </div>
          </div>
          <!-- Footer Bottom -->
          <div class="footer-copyright">
              <div class="container">
                  <div class="row">
                  <!-- Copyright Text -->
                  <div class="col l4 col m12 col s12">
                      &copy; Copyright 2017 Culture News by JICOS & Devcolin
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
                                  <a href="javascript:void(0);">Privacy</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0);">Advertisement</a>
                              </li>
                              <li>
                                  <a href="javascript:void(0);">Contact us</a>
                              </li>
                          </ul>
                      </div>
                  </div>
                  </div>
              </div>
          </div>
      </footer>