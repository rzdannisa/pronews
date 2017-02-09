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
                            <a href="index.html"><img src="assets/images/material-logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col l4 col m4 col s12 pull-right">
                        <!-- Search Button -->
                        <form class="searchbox">
                            <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
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
                            <form class="searchbox">
                                <input type="text" placeholder="Type and Press Enter" name="search" class="searchbox-input" required>
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
                                <a href="index.html"><img src="assets/images/material-logo.png" alt="Logo"></a>
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
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="javascript:void(0);">Culture <i class="fa fa-angle-down"></i></a>
                    <!-- <ul>
                      <li><a href="news-single1.html">News Detail 1</a></li>
                      <li><a href="news-single2.html">News Detail 2</a></li>
                      <li><a href="news-single3.html">News Detail 3</a></li>
                    </ul> -->
                  </li>
                </ul>
              </li>
              <li>
                <ul class="news-category-dropdown">
                  <li><a href="javascript:void(0);">Lifestyle <i class="fa fa-angle-down"></i></a>
                    <!-- <ul>
                      <li><a href="news-single1.html">News Detail 1</a></li>
                      <li><a href="news-single2.html">News Detail 2</a></li>
                      <li><a href="news-single3.html">News Detail 3</a></li>
                    </ul> -->
                  </li>
                </ul>
              </li><li>
                <ul class="news-category-dropdown">
                  <li><a href="javascript:void(0);">Sport <i class="fa fa-angle-down"></i></a>
                    <!-- <ul>
                      <li><a href="news-single1.html">News Detail 1</a></li>
                      <li><a href="news-single2.html">News Detail 2</a></li>
                      <li><a href="news-single3.html">News Detail 3</a></li>
                    </ul> -->
                  </li>
                </ul>
              </li>
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
          <li class="logo-title"><a href="javascript:void(0);">Culture News</a></li>
          <!-- Dropdown Menu -->
          <li class="dropdown-menu">
              <ul class="collapsible" data-collapsible="expandable">
                  <li class="">
                      <div class="collapsible-header waves-effect waves"><i class="fa fa-file"></i> <a href="{{url('/')}}"> Home </a></div>
                  </li>
                  <li class="">
                      <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Culture <i class="fa fa-angle-right"></i></div>
                      <!-- <div style="display: none;" class="collapsible-body">
                          <ul>
                              <li class="waves-effect"><a href="news-single1.html"><i class="fa fa-angle-right"></i> News Detail 1</a></li>
                          </ul>
                      </div> -->
                  </li>
                  <li class="">
                      <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Lifestyle <i class="fa fa-angle-right"></i></div>
                      <!-- <div style="display: none;" class="collapsible-body">
                          <ul>
                              <li class="waves-effect"><a href="index-sport.html"><i class="fa fa-angle-right"></i> Sport </a></li>
                          </ul>
                      </div> -->
                  </li>
                  <li class="">
                      <div class="collapsible-header waves-effect waves"><i class="fa fa-file-text"></i> Sport <i class="fa fa-angle-right"></i></div>
                      <!-- <div style="display: none;" class="collapsible-body">
                          <ul>
                              <li class="waves-effect"><a href="index-sport.html"><i class="fa fa-angle-right"></i> Sport </a></li>
                          </ul>
                      </div> -->
                  </li>
              </ul>
          </li>
          <li class="waves-effect"><a href="{{url('about')}}"><i class="fa fa-tag"></i>About</a></li>
          <li class="waves-effect"><a href="{{url('contact')}}"><i class="fa fa-briefcase"></i>Contact</a></li>
      </ul>