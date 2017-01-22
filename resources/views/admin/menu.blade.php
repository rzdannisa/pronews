      <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown notifications-menu">
                <a href="{{ url('/') }}">
                  <i style="font-size:20px;" class="fa fa-home"></i>
                </a>
              </li>
              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  
                  <img src="{{ url('img/user.png') }}" class="user-image" alt="User Image">
                  
                  <span class="hidden-xs">{{ session('name') }}</span>
                </a>
                <ul class="dropdown-menu">

                  <li class="user-header">
                    
                      <img src="{{ url('img/user.png') }}" class="img-circle" alt="User Image">
                    
                    <p>
                      {{ session('name') }} - {{ session('type') }}
                    </p>
                  </li>

                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="{{ url('manage_setting/edit_profile') }}" class="btn btn-default btn-flat">Edit Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ url('logout') }}" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>