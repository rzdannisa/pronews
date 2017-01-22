@extends('admin/app')

@section('content')


  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('manage') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Pro</b>N</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Pro</b> News</span>
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
        <div class="admin-seacrh" style="height:2px;">
            </div>

            
              @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data All user</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Type Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($alluser as $users)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $users->user_type_id}}</td>
                        <td>{{ $users->name}}</td>
                        <td>{{ $users->email}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_user/edit_user/'.$users->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_user/delete_user') }}">
                          <input type="hidden" name="id" value="{{$users->id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button style="border:none;color: #3c8dbc; background-color: white;" type="submit"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i></button>
                        </form>
                        </td>
                      </tr>
                    @endforeach
                    </tfoot>
                  </table>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
              </div>
        </section>
      </div>
      
</div>
</body>

    <script type="text/javascript">
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true,
              "info": true,
              "autoWidth": true
            });
    $('.birth_date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>
@endsection
