@extends('admin/app')

@section('content')
  <body class="hold-transition skin-blue sidebar-mini">
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
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Edit user</h3>
          </div><!-- /.box-header -->
          <div class="box-body">
            <form method="POST"  action="{{ url('manage_user/update_user') }}" enctype="multipart/form-data">
              <div class="row">
                  <input id="tyco" type="hidden" name="type_code" value="nip">
                <div class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Select Type</label>
                    <select id="selecttype" name="user_type_id" class="form-control not-res">
                    @foreach($user_type as $type)
                      <option value="{{$type->id}}">{{$type->name}}</option>
                    @endforeach
                    </select>
                  </div>
                <div  class="col-xs-6 col-md-4">
                  <label for="exampleInputPassword1">Name</label>
                  <input type="text" name="name" value="{{$user->name}}" class="form-control not-res" placeholder="Name" required/>
                </div>
              </div>
            <br>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row">
            <div  class="col-xs-6 col-md-4">

              <script type="text/javascript">
                function minmaxname(value, min, max)
                {
                    if(parseInt(value) < min || isNaN(value))
                        return value;
                    else if(parseInt(value) > max)
                        return value;
                    else return value;
                }
              </script>

              <label for="exampleInputPassword1">Email</label>
              <input type="email" name="email" value="{{$user->email}}" class="form-control not-res" maxlength="50" placeholder="Email" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div  class="col-xs-6 col-md-4">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" value="{{$user->password}}" class="form-control not-res" maxlength="20" placeholder="Password" onkeyup="this.value = minmaxname(this.value, 0, 20)" required/>
            </div>
            </div>
            <br>
            <div id="b-save"></div>
            <button style="width:90px;" type="submit" class="btn btn-primary">Update</button>
          </form>
          </div>
        </div>
      </div>

      <!-- <script>
        $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
      </script> -->
  </body>
@endsection
