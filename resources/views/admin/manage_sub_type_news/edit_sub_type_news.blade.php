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
                  <h3 class="box-title">Edit Sub Type News</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_sub_type_news/update_sub_type_news') }}" enctype="multipart/form-data">
                  <div class="row">  
                      
                  <div  class="col-xs-6 col-md-4">
                    <label for="exampleInputPassword1">Sub Type Name</label>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" name="name" value="{{$sub_typee_news->name}}" class="form-control not-res" placeholder="Name" required/>
                  </div>
                  <input type="hidden" name="id" value="{{$sub_typee_news->id}}">
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="type_news_id" class="form-control not-res">
                      @if($sub_typee_news->type_news_id == 3)
                      <option value="{{$sub_typee_news->type_news_id}}">Food</option>
                      @endif
                      @foreach($type_newss as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>

                  <br><br>
                  <div id="b-save"></div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                </div>
              </div>

              <br><br>
          <div style="width:95%;margin:auto" class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Sub Type News</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Id Type News</th>
                        <th>Name</th>
                        <th style="text-align:center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; ?>
                    @foreach($sub_type_newss as $subtype)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$subtype->type_news_id}}</td>
                        <td>{{ $subtype->name}}</td>
                        <td style="text-align:center">
                        <a href="{{ url('manage_sub_type_news/edit_sub_type_news/'.$subtype->id)}}"><i style="font-size:20px;margin-right:50px" class="fa fa-pencil-square-o"></i> </a>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_sub_type_news/delete_sub_type_news') }}">
                          <input type="hidden" name="id" value="{{$subtype->id}}">
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
