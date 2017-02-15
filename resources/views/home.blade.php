@extends('app')

@section('content')

@include('header')

<!-- Main Wrapper -->
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col l12 col m12 col s12">
                <!-- Tab Slider -->
                <div id="main-slider" class="liquid-slider">
                    @foreach($viewnews as $news)
                    <div>
                        <!-- Tab Slider Image -->
                        <img src="{{url('headline_news/'.$news->headline_news)}}" alt="">
                        <!-- Tab Slider Tab -->
                        <div class="slider-tab">
                            <div class="news-time">{{$news->created_at}}</div>
                            <div class="news-title">
                               <?php
                                    $string = strip_tags($news->news_title);

                                    if (strlen($string) > 25) {

                                        $stringCut = substr($string, 0, 25);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                                    }
                                        echo $string;
                              ?>
                            </div>
                            <div class="border-separator"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>

          <hr><h3 style="text-align:center;">Culture</h3><hr>

          <!-- culture section _______________________________________________________________________ -->

          <section class="section">
            <div class="row">
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news1.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news1.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- end culture section _____________________________________________________________________ -->

          <!-- Ads section _____________________________________________________________________ -->

          <div class="row">
            <div class="col l6 col m6 col s12">
                <!-- News Blog Solid Box -->
                <div class="news-blog solid z-depth-1">
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="pink">More</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown1"><i class="fa fa-ellipsis-v"></i></a>
                            <ul id="dropdown1" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description center-align">
                        <div class="quote"><i class="fa fa-quote-left"></i></div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna et bibendum leo metus vel magna.  </a></div>
                        <div class="news-content"><p>President of ThemeLeague <br> Dark Waider</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="assets/images/big-news7.jpg" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Money</span>
                        <!-- Dropdown -->
                        <div class="news-dropdown">
                            <a class="dropdown-button" href="javascript:void(0);" data-activates="dropdown2"><i class="fa fa-ellipsis-v"></i></a>
                            <ul id="dropdown2" class="dropdown-content">
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                                <li><a href="javascript:void(0);">Option 1</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-time">
                            21 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);">Party Sweepsto Israel <br> election Victory</a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus <br> ac tellus non rutrum. Integer.</p></div>
                    </div>
                </div>
            </div>
          </div>

          <!-- end Ads section _____________________________________________________________________ -->

          <!-- Lifestyle section _____________________________________________________________________ -->

          <hr><h3 style="text-align:center;">Lifestyle</h3><hr>

          <section class="section">
            <div class="row">
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news3.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/life4.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/money1.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur.</a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/profile2.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                      </div>
                  </div>
              </div>
            </div>
          </section>

          <!-- looping 4 article -->
            <div class="row">
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news3.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna leo metus vel magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer.</p></div>
                      </div>
                  </div>
              </div>
            <div class="col l3 col m6 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="assets/images/life4.jpg" alt="news Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="assets/images/money1.jpg" alt="news Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur.</a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l3 col m6 col s12">
                <!-- vertical News Box -->
                <div class="news vertical z-depth-1">
                    <!-- vertical News Image -->
                    <div class="news-image">
                        <img class="responsive-img" src="assets/images/profile2.jpg" alt="news Image">
                    </div>
                    <!-- vertical News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> 9 min ago
                        </div>
                        <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                        <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                    </div>
                </div>
            </div>
          </div>

          <!-- End Lifestyle section _____________________________________________________________________ -->

          <!-- Ads Big section _____________________________________________________________________ -->

          <section class="section">
            <div class="row">
              <div class="col l12 col m12 col s12">
                <img alt="news Image" src="assets/images/sport-big-5.jpg" class="responsive-img z-depth-1">
              </div>
            </div>
          </section>

          <!-- End Ads Big section _____________________________________________________________________ -->

          <!-- sport section _______________________________________________________________________ -->

          <hr><h3 style="text-align:center;">Sport</h3><hr>

          <!-- section 1 -->
          <section class="section">
            <div class="row">
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news1.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal no-border">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- Horizontal News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- Horizontal News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news1.jpg" alt="news Image">
                      </div>
                      <!-- Horizontal News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer. ut nisi risus.</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news2.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                      </div>
                  </div>
              </div>
            </div>
          </section>

          <!-- section 2 -->
          <section class="section">
            <div class="row">
              <div class="col l3 col m6 col s12">
                  <!-- Horizontal News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- Horizontal News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news1.jpg" alt="news Image">
                      </div>
                      <!-- Horizontal News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum Integer. ut nisi risus.</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="assets/images/small-news2.jpg" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i> 9 min ago
                          </div>
                          <div class="news-title"> <a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                          <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus In dapibus ac tellus non rutrum</p></div>
                      </div>
                  </div>
              </div>
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news1.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i> 9 min ago
                            </div>
                            <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna. </a></div>
                            <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                  <!-- Horizontal News Box -->
                  <div class="news horizontal no-border">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="assets/images/hor-news2.jpg" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                              <div class="news-time">
                                  <i class="fa fa-clock-o"></i> 9 min ago
                              </div>
                              <div class="news-title"><a href="javascript:void(0);"> Nam erat nulla, auctor a eros vitae, hendrerit efficitur magna.</a></div>
                              <div class="news-content"><p>et bibendum leo metus vel magna. In dapibus ac tellus non rutrum. Integer ut nisi risus. Mauris bibendum semper quam.</p></div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- end sport section _____________________________________________________________________ -->

        </div>
      </div>
@include('footer')
@endsection