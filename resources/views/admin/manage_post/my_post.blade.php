@extends('admin/app')

@section('content')
  
<body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="{{ url('manage') }}" class="logo">
        <span class="logo-mini">
          <b>A</b>FJ
        </span>
        <span class="logo-lg">
          <b>AL</b> FAJAR
        </span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
          
          @include('admin/menu')

      </nav>
    </header>

          @include('admin/sidebar')

    <div class="content-wrapper">
      <section class="content">
        <div class="admin-seacrh"></div>
        <div style="width:95%;margin:auto" class="box">
          <div class="box-header">
            <h3 class="box-title">My Post</h3>
          </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-body table-responsive">
                    <table id="master-user" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                  <th>No.</th>
                  <th>Created Date</th>
                  <th>Type News</th>
                  <th>Title</th>
                  <th>Modify Date</th>
                  <th style="text-align:center">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i=1; ?>
                    @foreach($post as $posts)
                <tr>
                  <td>{{$i++}}</td>
                  <td>{{$posts->created_at}}</td>
                  <td>{{$posts->type_news_id}}</td>
                  <td>
                    <!-- <a href="{{ url('view/'.$posts->id) }}"> -->{{ $posts->news_title }}<!-- </a> -->
                  </td>
                  <td>{{$posts->updated_at}}</td>
                  <td style="text-align:center">

                  <a href="{{ url('manage_post/edit_post/'.$posts->id) }}"><button type="button" class="btn btn-info">Edit</button></a>
                  <form style="display: inline-table;" method="POST" action="{{ url('manage_post/delete_post') }}">
                    <input type="hidden" name="id" value="{{$posts->id}}">
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
                          <th>Type News</th>
                          <th>Title</th>
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
</div>undefined</body>undefined

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