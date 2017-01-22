      <aside class="main-sidebar">

        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 343px;">
        <section class="sidebar">

          <div style="height:70px" class="user-panel">
            <div class="pull-left image">

              <img src="{{ url('img/user.png') }}" class="img-circle" alt="User Image">

            </div>
            <div class="pull-left info">
            <p>{{ session('name') }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          @if(!empty(session('type')))
          @if(session('idtype') == '1')
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Manage User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_user/master_user') }}"><i class="fa fa-tag"></i> Master User</a></li>
                <li><a href="{{ url('manage_user/page_edit_user') }}"><i class="fa fa-tag"></i> Edit User</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-thumb-tack"></i>
                <span>Manage Type News</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_type_news/master_type_news') }}"><i class="fa fa-bookmark-o"></i> Master Type News</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-puzzle-piece"></i>
                <span>Manage Sub Type News</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_sub_type_news/master_sub_type_news') }}"><i class="fa fa-bookmark-o"></i> Master Sub Type News</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/post_news') }}"><i class="fa fa-edit"></i> Post News</a></li>
                <li><a href="{{ url('manage_post/all_post') }}"><i class="fa fa-columns"></i> All Post</a></li>
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
              </ul>
            </li>
    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile') }}"><i class="fa fa-cog"></i> Edit Profile</a></li>
              </ul>
            </li>
          </ul>

          @elseif(session('idtype') == '')
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Manage User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_user/all_user') }}"><i class="fa fa-tag"></i> Master User</a></li>
                <li><a href="{{ url('manage_user/page_edit_user') }}"><i class="fa fa-tag"></i> Edit User</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-thumb-tack"></i>
                <span>Manage Type News</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_news/master_type_news') }}"><i class="fa fa-bookmark-o"></i> Master Type News</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-puzzle-piece"></i>
                <span>Manage Sub Type News</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_news/master_sub_type_news') }}"><i class="fa fa-bookmark-o"></i> Master Sub Type News</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/post_news') }}"><i class="fa fa-edit"></i> Post News</a></li>
                <li><a href="{{ url('manage_post/all_post') }}"><i class="fa fa-columns"></i> All Post</a></li>
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
              </ul>
            </li>
          </ul>
          
          @elseif(session('idtype') == '2')
          <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/post_news') }}"><i class="fa fa-edit"></i> Post News</a></li>
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
              </ul>
            </li>
    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Manage Setting</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_setting/edit_profile') }}"><i class="fa fa-cog"></i> Edit Profile</a></li>
              </ul>
            </li>
          </ul>

          @endif
          @endif
          
        </section>
      </div>
        <!-- /.sidebar -->
      </aside>