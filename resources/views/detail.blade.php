@extends('app')

@section('content')

@include('header')
      <!-- Main Wrapper -->
      <div class="wrapper">
          <div class="container">
              <div class="row">

                <div class="col l9 col m12">
                    <!-- News Single Style 3 -->
                    <div class="news-single style-3 z-depth-1">
                        <!-- News Image -->
                        @foreach($news as $posts)
                          @foreach($posts->typenews as $type)
                            @foreach($posts->subtypenews as $sub)
                              @foreach($posts->author as $usr)
                        <img class="responsive-img" src="{{url('headline_news/'.$posts->headline_news)}}" alt="news Image">
                        <div class="content">
                            <!-- News Category -->
                            <div class="news-category">{{$type->name}} > {{$sub->name}}</div>
                            <!-- share button -->
                            <div class="social-icon pull-right">
                                <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                            </div>
                            <!-- News Title -->
                            <div class="news-title">
                                {{$posts->news_title}}
                            </div>
                            <!-- News Description -->
                            <div class="description">
                                {!! $posts->content !!}
                            </div>
                            <!-- News Detail -->
                            <div class="news-detail">
                                <span class="news-by"><a>{{$usr->name}}</a></span>
                                <span class="news-month"><a><i class="fa fa-clock-o"></i>
                                <?php
                                  $date = strtotime($posts->created_date);
                                  echo date("l , d-m-Y", $date);
                                ?></a></span>
                                <span class="news-comment"><a><i class="mdi-communication-messenger"></i> {{session('jml')}}</a></span>
                                <!-- <span class="news-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i> </a></span> -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col l3 col m12">

                    <!-- New single Style 3 Advertise Box -->
                    <!-- <div class="advertis z-depth-1"> -->
                        <!-- Advertise Image -->
                        <!-- <img src="assets/images/advertise.jpg" alt="" class="responsive-img"> -->
                        <div class="sidbar-box left-align">
                            <div class="sidebar-title">Recent Post</div>
                            <div class="news-sidebar">
                              @foreach($recent as $few)
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" onclick="location.href='{{url('detail/'.$few->slug)}}'" src="{{url('headline_news/'.$few->headline_news)}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a href="javascript:void(0);">
                                            <?php
                                          $date = strtotime($few->created_date);
                                          echo date("l , d-m-Y", $date);
                                        ?> </a>
                                        </div>
                                        <div class="news-title">
                                            <a href="{{url('detail/'.$few->slug)}}">
                                        <?php
                                                $string = strip_tags($few->news_title);
                                                if (strlen($string) > 35) {
                                                    $stringCut = substr($string, 0, 35);
                                                    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                                                }
                                                    echo $string;
                                          ?>
                                          </a>
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                            <div class="sidebar-title">News Ads</div>
                            @forelse($simads1 as $sa1)
                            <div class="news-sidebar">
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('for_image/'.$sa1->for_image)}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>{{$sa1->title}} </a>
                                        </div>
                                        <div class="news-title" style="text-align: justify;">
                                            <a>{{$sa1->for_text}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="news-sidebar">
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('assets/images/medium-ads.png')}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>Title Ads | 21 min ago </a>
                                        </div>
                                        <div class="news-title">
                                            <a> Content Ads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('assets/images/medium-ads.png')}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>Title Ads | 21 min ago </a>
                                        </div>
                                        <div class="news-title">
                                            <a> Content Ads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('assets/images/medium-ads.png')}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>Title Ads | 21 min ago </a>
                                        </div>
                                        <div class="news-title">
                                            <a> Content Ads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('assets/images/medium-ads.png')}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>Title Ads | 21 min ago </a>
                                        </div>
                                        <div class="news-title">
                                            <a> Content Ads</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="news-box">
                                    <!-- News Sidebar Image -->
                                    <div class="image">
                                        <img alt="news Image" src="{{url('assets/images/medium-ads.png')}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a>Title Ads | 21 min ago </a>
                                        </div>
                                        <div class="news-title">
                                            <a> Content Ads</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforelse
                        </div>
                    <!-- </div> -->
                </div>
              </div>

              <div class="row">
          @forelse($bigads1 as $ba1)
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="{{url('for_image/'.$ba1->for_image)}}" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Advertisement</span>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <div class="news-title" style="font-size: 25px"> {{$ba1->title}}</div>
                        <div class="news-content"><p>{{$ba1->for_text}}</p></div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="{{url('assets/images/big-ads.png')}}" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Advertisement</span>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <!-- <div class="news-title"> <a>Party Sweepsto Israel <br> election Victory</a></div> -->
                        <div class="news-content"><p>Place your Ads here <br> Contact us.</p></div>
                    </div>
                </div>
            </div>
            <div class="col l6 col m6 col s12">
                <!-- News Blog Box -->
                <div class="news-blog z-depth-1">
                    <!-- News Blog Image -->
                    <div class="image">
                        <img class="responsive-img" src="{{url('assets/images/big-ads.png')}}" alt="news Image">
                    </div>
                    <!-- News Blog Category -->
                    <div class="news-category">
                        <span class="green">Advertisement</span>
                    </div>
                    <!-- News Blog Description -->
                    <div class="news-description">
                        <!-- <div class="news-title"> <a>Party Sweepsto Israel <br> election Victory</a></div> -->
                        <div class="news-content"><p>Place your Ads here <br> Contact us.</p></div>
                    </div>
                </div>
            </div>
            @endforelse
          </div>

              <div class="row">
                <div class="col l12">
                  <!-- Comment Box -->
                  <div class="comment z-depth-1">
                    <div class="col l12 col m12 col s12">
                          <!-- Comment Title -->
                          @if (session('status'))
                            <div class="alert alert-success">
                          <b>{{ session('status') }}</b>
                            </div>
                          @endif
                          <div class="comment-title">Comments</div>
                          <div class="clearfix"></div>
                          <ul>
                            <!-- Comment Box -->
                            @foreach($comm as $comment)
                            <li class="comment-box">
                                <!-- Comment Image -->
                                <div class="comment-image">
                                    <img class="responsive-img" src="{{url('assets/images/client1.png')}}" alt="news Image">
                                </div>
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Name -->
                                    <div class="comment-name">
                                        {{$comment->nama}}
                                    </div>
                                    <!-- Comment Detail -->
                                    <div class="comment-detail">
                                        <p style="font-weight: 300;margin-bottom: 10px;">
                                        {{$comment->email}}</p>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                    <!-- Comment Time -->
                                    <div class="comment-time">
                                          <?php
                                          $date = strtotime($comment->created_date);
                                          echo date("d-m-Y", $date);
                                        ?>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                          </ul>

                          <form action="{{url('comment/save')}}" method="post" id="contactForm" name="sentMessage">
                              <div class="comment-title">Leave Comment</div>
                              <div class="input-field">
                                  <input type="text" name="nama" class="validate" id="name" placeholder="Name" required>
                              </div>
                              <div class="input-field">
                                  <input type="email" name="email" class="validate" id="email" placeholder="E-Mail" required>
                              </div>
                              <div class="input-field">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  <textarea class="materialize-textarea" name="comment" id="textarea1" placeholder="Message" required></textarea>
                              </div>
                              <input type="hidden" name="id_news" value="{{$posts->id}}">
                              <button name="action" type="submit" class="btn btn-flat waves-effect waves-light shopping-cart-button">Submit Now</button>
                          </form>
                      </div>
                  </div>
                        @endforeach
                        @endforeach
                        @endforeach
                        @endforeach
                </div>
              </div>
          </div>
      </div>


@include('footer')
@endsection
