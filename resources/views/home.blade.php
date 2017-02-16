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
                            <div class="news-time">
                              <?php
                                $date = strtotime($news->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                            </div>
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
                  @foreach($culture1 as $c1)
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="{{url('headline_news/'.$c1->headline_news)}}" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i>
                                <?php
                                  $date = strtotime($c1->created_date);
                                  echo date("l , d-m-Y", $date);
                                ?>
                            </div>
                            <div class="news-title"><a href="{{url('detail/'.$c1->slug)}}"> {{$c1->news_title}} </a></div>
                            <div class="news-content"><p>{{$c1->news_desc}}</p></div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                  <!-- Horizontal News Box -->
                  @foreach($culture2 as $c2)
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="{{url('headline_news/'.$c2->headline_news)}}" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i>
                                <?php
                                  $date = strtotime($c2->created_date);
                                  echo date("l , d-m-Y", $date);
                                ?>
                            </div>
                            <div class="news-title"><a href="{{url('detail/'.$c2->slug)}}"> {{$c2->news_title}} </a></div>
                            <div class="news-content"><p>{{$c2->news_desc}}</p></div>
                          </div>
                      </div>
                  </div>
                  @endforeach
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
            @foreach($ls1 as $s1)
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="{{url('headline_news/'.$s1->headline_news)}}" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i>
                              <?php
                                $date = strtotime($s1->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                          </div>
                          <div class="news-title"><a href="{{url('detail/'.$s1->slug)}}"> {{$s1->news_title}} </a></div>
                          <div class="news-content"><p>{{$s1->news_desc}}</p></div>
                      </div>
                  </div>
              </div>
              @endforeach
            </div>
          </section>

          <!-- looping 4 article -->
            <div class="row">
            @foreach($ls2 as $s2)
              <div class="col l3 col m6 col s12">
                  <!-- vertical News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- vertical News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="{{url('headline_news/'.$s2->headline_news)}}" alt="news Image">
                      </div>
                      <!-- vertical News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i>
                              <?php
                                $date = strtotime($s2->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                          </div>
                          <div class="news-title"><a href="{{url('detail/'.$s2->slug)}}"> {{$s2->news_title}} </a></div>
                          <div class="news-content"><p>{{$s2->news_desc}}</p></div>
                      </div>
                  </div>
              </div>
              @endforeach
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
                @foreach($sp1 as $p1)
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="{{url('headline_news/'.$p1->headline_news)}}" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i>
                                <?php
                                  $date = strtotime($p1->created_date);
                                  echo date("l , d-m-Y", $date);
                                ?>
                            </div>
                            <div class="news-title"><a href="{{url('detail/'.$p1->slug)}}"> {{$p1->news_title}} </a></div>
                            <div class="news-content"><p>{{$p1->news_desc}}</p></div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
              </div>
              @foreach($sp2 as $p2)
              <div class="col l3 col m6 col s12">
                  <!-- Horizontal News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- Horizontal News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="{{url('headline_news/'.$p2->headline_news)}}" alt="news Image">
                      </div>
                      <!-- Horizontal News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i>
                              <?php
                                $date = strtotime($p2->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                          </div>
                          <div class="news-title"><a href="{{url('detail/'.$p2->slug)}}"> {{$p2->news_title}} </a></div>
                          <div class="news-content"><p>{{$p2->news_desc}}</p></div>
                      </div>
                  </div>
              </div>
              @endforeach
            </div>
          </section>

          <!-- section 2 -->
          <section class="section">
            <div class="row">
            @foreach($sp3 as $p3)
              <div class="col l3 col m6 col s12">
                  <!-- Horizontal News Box -->
                  <div class="news vertical z-depth-1">
                      <!-- Horizontal News Image -->
                      <div class="news-image">
                          <img class="responsive-img" src="{{url('headline_news/'.$p3->headline_news)}}" alt="news Image">
                      </div>
                      <!-- Horizontal News Description -->
                      <div class="news-description">
                          <div class="news-time">
                              <i class="fa fa-clock-o"></i>
                              <?php
                                $date = strtotime($p3->created_date);
                                echo date("l , d-m-Y", $date);
                              ?>
                          </div>
                          <div class="news-title"><a href="{{url('detail/'.$p3->slug)}}"> {{$p3->news_title}} </a></div>
                          <div class="news-content"><p>{{$p3->news_desc}}</p></div>
                      </div>
                  </div>
              </div>
            @endforeach
              <div class="col l6 col m12 col s12">
                <div class="z-depth-1">
                @foreach($sp4 as $p4)
                  <div class="news horizontal">
                      <div class="col l4 col m4 col s12 no-padding">
                          <!-- Horizontal News Image -->
                          <div class="news-image">
                              <img class="responsive-img" src="{{url('headline_news/'.$p4->headline_news)}}" alt="news Image">
                          </div>
                      </div>
                      <div class="col l8 col m8 col s12 no-padding">
                          <!-- Horizontal News Description -->
                          <div class="news-description">
                            <div class="news-time">
                                <i class="fa fa-clock-o"></i>
                                <?php
                                  $date = strtotime($p4->created_date);
                                  echo date("l , d-m-Y", $date);
                                ?>
                            </div>
                            <div class="news-title"><a href="{{url('detail/'.$p4->slug)}}"> {{$p4->news_title}} </a></div>
                            <div class="news-content"><p>{{$p4->news_desc}}</p></div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </section>

          <!-- end sport section _____________________________________________________________________ -->

        </div>
      </div>
@include('footer')
@endsection
