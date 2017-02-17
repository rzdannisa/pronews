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
                    <!-- New single Style 3 Testimonial -->
                    <!-- <div class="testimonial z-depth-1">
                        <div class="card-panel">
                            <div class="valign-wrapper"> -->
                                <!-- Testimonial Image -->
                                <!-- <div class="col l4">
                                    <img src="assets/images/client.jpg" alt="" class="circle responsive-img">
                                </div> -->
                                <!-- Testimonial Detail -->
                                <!-- <div class="col l8">
                                    <p>you do not need to worry about how to get to get service and when</p>
                                </div>
                            </div>
                        </div>
                    </div> -->

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
                                        <img alt="news Image" src="{{url('headline_news/'.$few->headline_news)}}">
                                    </div>
                                    <!-- News Sidebar Detail -->
                                    <div class="news-detail">
                                        <div class="news-category">
                                            <a href="javascript:void(0);"><?php
                                          $date = strtotime($few->created_date);
                                          echo date("l , d-m-Y", $date);
                                        ?> </a>
                                        </div>
                                        <div class="news-title">
                                            <a href="{{url('detail/'.$few->slug)}}"> {{$few->news_title}}</a>
                                        </div>
                                    </div>
                                </div>
                              @endforeach

                            </div>
                        </div>
                    <!-- </div> -->
                </div>
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
                                    <img class="responsive-img" src="{{url('assets/images/client1.jpg')}}" alt="news Image">
                                </div>
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Name -->
                                    <div class="comment-name">
                                        {{$comment->nama}}
                                    </div>
                                    <!-- Comment Detail -->
                                    <div class="comment-detail">
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                    <!-- Comment Time -->
                                    <div class="comment-time">
                                        {{$comment->created_date}}
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
                                  <textarea class="materialize-textarea" name="comment" id="textarea1" placeholder="Message" required></textarea>
                              </div>
                              <input type="hidden" name="id_news" value="$posts->id">
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
