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

        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Data Customer</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            <form method="POST"  action="{{ url('manage_advertisement/data_customer/update') }}" enctype="multipart/form-data">
              <div class="row">

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input value="{{$edit->nama}}" type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Name" required/>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                    <label for="exampleInputPassword1" class="col-sm-2 control-label">Choose Type</label>
                    <div class="col-sm-10">
                        <select name="lt_id_adv" class="form-control not-res" required>
                          <option value="">Select Type</option>
                          @foreach($adv as $adve)
                          <option value="{{$adve->id}}">{{$adve->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Join Date</label>
                      <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker1'>
                          <input value="{{$edit->created_date}}" type='text' name="created_date" class="form-control _date" required/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input value="{{$edit->email}}" type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" required/>
                      </div>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <br>
                    <br>

                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Contact</label>
                      <div class="col-sm-10">
                        <input value="{{$edit->contact}}" type="number" name="contact" maxlength="15" class="form-control" id="exampleInputEmail1" placeholder="Contact" required/>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Detail</label>
                      <div class="col-sm-10">
                        <input value="{{$edit->detail}}" type="text" name="detail" class="form-control" id="exampleInputEmail1" placeholder="Detail" required/>
                      </div>
                    </div>

                    <br>

                    <div style="padding:20px 15px 0 0;" class="pull-right">

                      <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Save and Publish</button>
                    </div>

              </div>
              <br>
            </form>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header"><h4>Data Customer</h4></div>
              <div class="box-body table-responsive">
                <table id="master-user" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Join Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Detail</th>
                      <th>Type Advertisement</th>
                      <th>Modify Date</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($fdc as $dc)
                      <tr>
                        <td>{{$i++}}</td>
                        <td>{{$dc->id}}</td>
                        <td>
                          <?php
                            $date = strtotime($dc->created_date);
                            echo date("d-m-Y", $date);
                          ?>
                        </td>
                        <td>{{$dc->nama}}</td>
                        <td>{{$dc->email}}</td>
                        <td>{{$dc->contact}}</td>
                        <td>{{$dc->detail}}</td>
                        <td>{{$dc->lt_id_adv}}</td>
                        <td>
                          <?php
                            $date = strtotime($dc->updated_at);
                            echo date("d-m-Y H:i", $date);
                          ?>
                        </td>

                        <td>
                          <a href="{{ url('manage_advertisement/data_customer/edit/'.$dc->id)}}"><button style="width:90px;" type="button" class="btn btn-info">Edit</button></a>
                        </td>
                        <td>
                          <form style="display: inline-table;" method="POST" action="{{ url('manage_advertisement/data_customer/delete') }}">
                            <input type="hidden" name="id" value="{{$dc->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button style="width:90px;" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this feature advertisement?')" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                   </tbody>
                   <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Join Date</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Contact</th>
                      <th>Detail</th>
                      <th>Type Advertisement</th>
                      <th>Modify Date</th>
                      <th>Action</th>
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
     <script>
      $('.for_date').datetimepicker({ format: 'YYYY-MM-DD HH:mm' });
       // $(".for_date").datepicker();
       $('#selecttype').change(function(){
         if($(this).val() == "agenda"){
           $('#inputdate').show();
         }
         else{
           $('#inputdate').hide();
         }
       });

       CKEDITOR.editorConfig = function( config ) {
       config.skin = "office2013";
       config.extraPlugins = 'uploadimage,image2';

       config.imageUploadUrl = "{{route('drag',['_token' => csrf_token() ])}}";
       config.filebrowserImageUploadUrl = "{{route('upload',['_token' => csrf_token() ])}}";

       config.image2_alignClasses = [ 'image-align-left', 'image-align-center', 'image-align-right' ];
       config.toolbar = [
         { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },

         { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
         { name: 'editing', items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
         { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
         { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },'/',
         { name: 'paragraph2', items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl'] },
         { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'Smiley', 'SpecialChar'] },
         { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
         { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
       ];
      };

      $('._date').datetimepicker({ format: 'YYYY-MM-DD' });
    </script>

  </body>
@endsection
