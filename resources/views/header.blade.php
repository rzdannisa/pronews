      <!-- Header -->
      <header>
        <!-- Header Top Display In large and Tablet Device -->
        <div class="header-top hide-on-small-only">
            <div class="container">
                <div class="row">
                    <div class="col l4 col m5 col s12">
                        <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                        <!-- Dropdown -->
                        <div class="header-dropdown">
                            <!-- Dropdown Trigger -->
                            <!-- <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown'>Today <i class="mdi-navigation-arrow-drop-down"></i></a> -->
                            <!-- Dropdown Structure -->
                            <!-- <ul id='dropdown' class='dropdown-content'>
                              <li><a href="javascript:void(0);">Today</a></li>
                              <li><a href="javascript:void(0);">Yesterday</a></li>
                              <li><a href="javascript:void(0);">1 Week</a></li>
                              <li><a href="javascript:void(0);">1 Month</a></li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="col l4 col m3 col s12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{url('/')}}"><img style="border-radius:5px;" src="{{url('assets/images/material-logo.png')}}" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col l4 col m4 col s12 pull-right">
                        <!-- Search Button -->
                        <form method="GET" action="{{url('search')}}" class="searchbox">
                            <input name="q" type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                            <input type="submit" class="searchbox-submit">
                            <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                        </form>
                        <!-- LogIn Link -->
                        <!-- <a href="login.html" class="right login">Login</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Header top Display On Mobile -->
        <div class="header hide-on-med-and-up">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col l4 col m5 col s2">
                            <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
                        </div>
                        <div class="col l4 col m4 col s5">
                            <!-- Dropdown -->
                            <div class="header-dropdown">
                                <!-- Dropdown Trigger -->
                                <!-- <a class='dropdown-button btn' data-beloworigin="true" href='#' data-activates='dropdown-mobile'>Today <i class="mdi-navigation-arrow-drop-down"></i></a> -->
                                <!-- Dropdown Structure -->
                                <!-- <ul id='dropdown-mobile' class='dropdown-content'>
                                  <li><a href="javascript:void(0);">Today</a></li>
                                  <li><a href="javascript:void(0);">Yesterday</a></li>
                                  <li><a href="javascript:void(0);">1 Week</a></li>
                                  <li><a href="javascript:void(0);">1 Month</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col l4 col m4 col s3">
                            <!-- LogIn Link -->
                            <!-- <a href="login.html" class="login">Login</a> -->
                        </div>
                        <div class="col l4 col m4 col s2">
                        <!-- Search Button -->
                            <form method="GET" action="{{url('search')}}" class="searchbox">
                            <input name="q" type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
                            <input type="submit" class="searchbox-submit">
                            <span class="searchbox-icon"><i class="mdi-action-search"></i></span>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header">
                <div class="container">
                    <div class="row">
                        <div class="col l4 col m4 col s12">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="{{url('assets/images/material-logo.png')}}" alt="Logo"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav role="navigation" class="hide-on-small-only">
          <div class="nav-wrapper menu-category">
            <ul>
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="{{url('/')}}"> Home <i></i></a></li>
                </ul>
              </li>
              @foreach($menu as $menuu)
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="javascript:void(0);">{{$menuu->name}}<i class="fa fa-angle-down"></i></a>
                    <ul>
                    @foreach($menuu->subtypeee as $sub)
                    <?php
                      $subname = strtolower($sub->name);
                      $typenews = strtolower($menuu->name);
                    ?>
                      <li><a href="{{url('home/'.$typenews.'/'.$subname)}}">{{$sub->name}}</a></li>
                    @endforeach
                    </ul>
                  </li>
                </ul>
              </li>
              @endforeach
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="{{url('about')}}"> About <i></i></a></li>
                </ul>
              </li>
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="{{url('contact')}}"> Contact <i></i></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <!-- Sidebar Navigation -->
      <ul id="slide-out" class="side-nav full">
          <li class="logo-title"><a href="javascript:void(0);">CPLUSNEWS</a></li>
          <!-- Dropdown Menu -->
          <li class="dropdown-menu">
              <ul class="collapsible" data-collapsible="expandable">
                  <li class="">
                      <div class="collapsible-header waves-effect waves active"><i class="fa fa-home"></i><a href="{{url('/')}}"> Home </a></div>
                  </li>
                  @foreach($menu as $menuu)
                  <li class="">
                      <div class="collapsible-header waves-effect waves"><i class="fa fa-newspaper-o"></i> {{$menuu->name}}<i class="fa fa-angle-right"></i></div>
                      <div style="display: none;" class="collapsible-body">
                          <ul>
                              @foreach($menuu->subtypeee as $sub)
                              <?php
                                $subname = strtolower($sub->name);
                                $type = strtolower($menuu->name);
                              ?>

                              <li class="waves-effect"><a href="{{url('home/'.$typenews.'/'.$subname)}}"> {{$sub->name}}</a></li>
                              @endforeach
                          </ul>
                      </div>
                  </li>
                  @endforeach
              </ul>
          </li>
          <li class="waves-effect"><a href="{{url('about')}}"><i class="fa fa-quote-left"></i>About</a></li>
          <li class="waves-effect"><a href="{{url('contact')}}"><i class="fa fa-phone-square"></i>Contact</a></li>
      </ul>
