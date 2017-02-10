@extends('admin/app')

@section('content')


  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('manage') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CL</b>NE</span>
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
        <div class="admin-seacrh" style="height:2px;">
            </div>


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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master User</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">

                <form method="POST"  action="{{ url('manage_user/add_user') }}" enctype="multipart/form-data">
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
                    <input type="text" name="name" class="form-control not-res" placeholder="Name" required/>
                  </div>
                  </div>
                  <br>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                    <input type="email" name="email" class="form-control not-res" maxlength="50" placeholder="Email" onkeyup="this.value = minmaxname(this.value, 0, 50)" required/>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  </div>
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control not-res" maxlength="20" placeholder="Password" onkeyup="this.value = minmaxname(this.value, 0, 20)" required/>
                  </div>
                  </div>
                  <br>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
              </div>

            <br><br>
            <!-- ikuti struktur ini -->
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body table-responsive">
                    <table id="master-user" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Type Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <!-- <th style="text-align:center">Action</th> -->
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
                            <!-- <td style="text-align:center">
                            <a href="{{ url('manage_user/edit_user/'.$users->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                            <a href="{{ url('manage_user/delete_user/'.$users->id)}}"><i style="font-size:20px;margin:0px " class="fa fa-trash"></i> </a>
                            </td> -->
                          </tr>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Type Id</th>
                          <th>Name</th>
                          <th>Email</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->
            </div><!-- /.row -->
            <!-- ikuti struktur ini -->

          </div>
        </section>
      </div>
</div>

<!-- copas script ini -->

<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ url('https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css') }}">
<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js') }}"></script>
<script src="{{ url('//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
<script src="{{ url('//cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js') }}"></script>

<script>

$(function () {
    /*********************** AO ***********************/
    // Setup - add a text input to each footer cell
    $('#master-user tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input style="width:100%;" type="text" placeholder="Search '+title+'" />' );
      } );

    var table = $('#master-user').DataTable({
      responsive: true,
      stateSave: true,
      "paging": true,
      "lengthChange": true,
      "ordering": true,
      "info": false,
      "autoWidth": true,
      "order": [[ 0, "desc" ]],
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      dom: 'lrtipB',
      buttons: [
              'copy', 'excel'
      ]
    });

    // Apply the search
    table.columns().every( function () {
      var that = this;
      $( 'input', this.footer() ).on( 'keyup change', function () {
          if ( that.search() !== this.value ) {
            that
            .search( this.value )
            .draw();
          }
      });
    });
  /*********************** End of AO ***********************/
  });
</script>

<!-- copas script ini -->

</body>
@endsection
