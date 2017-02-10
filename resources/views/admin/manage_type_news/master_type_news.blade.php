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
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master Type News</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_type_news/add_type_news') }}" enctype="multipart/form-data">
                  <div class="row">  
                      
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="name" class="form-control not-res" placeholder="Name" required/>
                  </div>
                  </div>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
                </div>
              </div>

              <br><br>
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body table-responsive">
                    <table id="master-user" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                        <th>No.</th>
                          <th>Created Date</th>
                          <th>Name</th>
                          <th>Modify Date</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($type_newss as $typee)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{ $typee->created_at}}</td>
                        <td>{{ $typee->name}}</td>
                        <td>{{ $typee->updated_at}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_type_news/edit_type_news/'.$typee->id)}}"><button type="button" class="btn btn-info">Edit</button></a>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_type_news/delete_type_news') }}">
                          <input type="hidden" name="id" value="{{$typee->id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        
                        </td>
                      </tr>
                    @endforeach
                     </tbody>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Created Date</th>
                          <th>Name</th>
                          <th>Modify Date</th>
                        <th style="text-align:center">Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div><!-- /.box-body -->
                </div><!-- /.box -->
              </div><!-- /.col -->
            </div><!-- /.row -->
              </div>
        </section>
      </div>
      
</div>
</body>

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
@endsection
