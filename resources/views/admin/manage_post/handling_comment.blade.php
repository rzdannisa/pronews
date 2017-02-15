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
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header"><h4>Data All Comment</h4></div>
              <div class="box-body table-responsive">
                <table id="master-user" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Created Date</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>ID News</th>
                    <th>Title News</th>
                    <th>Modify Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  @foreach($comment as $comments)
                  @foreach($comments->idnews as $news)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>
                        <?php
                          $date = strtotime($comments->created_date);
                          echo date("d-m-Y", $date);
                        ?>
                      </td>
                      <td>{{$comments->nama}}</td>
                      <td>{{$comments->email}}</td>
                      <td>
                            <?php
                                    $string = strip_tags($comments->comment);

                                    if (strlen($string) > 50) {

                                        $stringCut = substr($string, 0, 50);
                                        $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                                    }
                                        echo $string;
                              ?>
                      </td>
                      <td>{{$comments->id_news}}</td>

                      <td>{{$news->news_title}}</td>
                      <td>
                        <?php
                          $date = strtotime($comments->updated_at);
                          echo date("d-m-Y H:i", $date);
                        ?>
                      </td>
                      <td>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_post/handling_comment/delete') }}">
                          <input type="hidden" name="id" value="{{$comments->id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button style="width:90px;" onclick="return confirm('Are you sure you want to delete this News ?')" class="btn btn-danger" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Created Date</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>ID News</th>
                    <th>Title News</th>
                    <th>Modify Date</th>
                    <th>Action</th>
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
          "info": true,
          "autoWidth": true,
          "order": [[ 0, "desc" ]],
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
          // dom: 'lrtipB',
          // buttons: [
          //         'copy', 'excel'
          // ]
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
</body>
@endsection
