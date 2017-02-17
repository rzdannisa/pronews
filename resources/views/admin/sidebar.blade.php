      <aside class="main-sidebar">

        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 343px;">
        <section class="sidebar">

          <div style="height:70px" class="user-panel">
            <div class="pull-left image">

               @foreach($auth as $user)

                  @if(!empty($user->photo))
                  <img src="{{ url('photo_profile/'.$user->photo) }}" class="img-circle" alt="User Image">
                  @else
                  <img src="{{ url('img/user.png') }}" class="img-circle" alt="User Image">
                  @endif

            </div>
            <div class="pull-left info">
            <p>{{ $user->name }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

              @endforeach

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
                <li><a href="{{ url('manage_user/master_user') }}"><i class="fa fa-bookmark-o"></i> Master User</a></li>
                <li><a href="{{ url('manage_user/page_edit_user') }}"><i class="fa fa-edit"></i> Data User</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-list-alt"></i>
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
                <span>Manage Sub Type</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_sub_type_news/master_sub_type_news') }}"><i class="fa fa-bookmark-o"></i> Master Sub Type</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-text"></i>
                <span>Manage Post</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_post/post_news') }}"><i class="fa fa-newspaper-o"></i> Post News</a></li>
                <li><a href="{{ url('manage_post/all_post') }}"><i class="fa fa-columns"></i> All Post</a></li>
                <li><a href="{{ url('manage_post/my_post') }}"><i class="fa fa-list"></i> My Post</a></li>
                <li><a href="{{ url('manage_post/handling_comment') }}"><i class="fa fa-commenting-o"></i> Handling Comment</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-cubes"></i>
                <span>Manage Feature</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_feature/feature_about') }}"><i class="fa fa-quote-left"></i> Feature About</a></li>
                <li><a href="{{ url('manage_feature/feature_contact') }}"><i class="fa fa-phone-square"></i> Feature Contact</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-buysellads"></i>
                <span>Manage Advertisement</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_advertisement/feature_adv') }}"><i class="fa fa-list-ol"></i> Feature Advertisement</a></li>
                <li><a href="{{ url('manage_advertisement/data_customer') }}"><i class="fa fa-users"></i> Data Customer</a></li>
                <li><a href="{{ url('manage_advertisement/master_adv') }}"><i class="fa fa-bookmark-o"></i> Master Advertisement</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-recycle"></i>
                <span>Manage Recycle Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_recycle_data/data_recycle_post') }}"><i class="fa  fa-list-alt"></i> Data Recycle Post</a></li>
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
                <li><a href="{{ url('manage_post/handling_comment') }}"><i class="fa fa-list"></i> Handling Comment</a></li>
              </ul>
            </li>
          </ul>

          <li class="treeview">
              <a href="#">
                <i class="fa fa-cubes"></i>
                <span>Manage Feature</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_feature/feature_about') }}"><i class="fa fa-quote-left"></i> Feature About</a></li>
                <li><a href="{{ url('manage_feature/feature_contact') }}"><i class="fa fa-phone-square"></i> Feature Contact</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-buysellads"></i>
                <span>Manage Advertisement</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_advertisement/feature_adv') }}"><i class="fa fa-list-ol"></i> Feature Advertisement</a></li>
                <li><a href="{{ url('manage_advertisement/data_customer') }}"><i class="fa fa-users"></i> Data Customer</a></li>
                <li><a href="{{ url('manage_advertisement/master_adv') }}"><i class="fa fa-diamond"></i> Master Advertisement</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-buysellads"></i>
                <span>Manage Recycle Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('manage_recycle_data/data_recycle_post') }}"><i class="fa fa-list-ol"></i> Data Recycle Post</a></li>
              </ul>
            </li>

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
                <li><a href="{{ url('manage_post/handling_comment') }}"><i class="fa fa-list"></i> Handling Comment</a></li>
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
