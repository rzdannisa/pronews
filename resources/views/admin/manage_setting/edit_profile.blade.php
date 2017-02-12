@extends('admin/app')

@section('content')
  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CL</b>N</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Culture</b> News</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          @include('admin/menu')
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
        @include('admin/sidebar')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="admin-seacrh" style="height:2px;"></div>
        @if (session('status'))
          <div class="alert alert-success">
        {{ session('status') }}
          </div>
        @endif
        @if (session('error'))
          <div class="alert alert-danger">
        {{ session('error') }}
          </div>
        @endif
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile</h3>
            </div><!-- /.box-header -->
            <form method="POST"  action="{{ url('manage_setting/update_profile') }}" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputPassword1">Id Type</label>
                  <select style="background:#eee !important"  id="selecttype" name="user_type_id" class="form-control not-res" readonly="readonly">
                    <option value="{{$users->user_type_id}}">{{$users->user_type_id}}</option>
                  </select>
                </div>
              <br>
              <input type="hidden" name="id" value="{{$users->id}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" name="email" value="{{ $users->email }}" class="form-control not-res" placeholder="Email">
              </div>
              <br>

             <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input value="{{ $users->name }}" type="text" name="name" class="form-control not-res" maxlength="20" placeholder="Name" required/>
              </div>
              <br>

              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input value="{{ $users->password }}" type="password" name="password" class="form-control not-res" maxlength="20" placeholder="Password" required/>
              </div>
              @if(!empty($users->photo))
              <img style="max-height: 150px;max-width: 150px;" src="{{ url('photo_profile/'.$users->photo) }}">
              @else
              <span>Upload your photo profile now!</span>
              @endif
              <div class="form-group">
                <label for="exampleInputPassword1">Photo Profile</label>
                <input type="file" name="photo" value="{{ $users->photo }}" class="form-control not-res"  placeholder="Photo"/>
              </div>
              <br>
              </div><!-- /.box-body -->

              <div class="box-footer">
                <button style="width:90px;" onclick="return confirm('Are you sure you want to edit your profile ?')" type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
            <br>
          </div><!-- /.box -->
        </section>
      </div>
    </div>
  </body>
@endsection
