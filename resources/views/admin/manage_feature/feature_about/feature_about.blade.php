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
        @if(!empty($aa))
        @else
        <div class="box box-default collapsed-box box-solid">
          <div class="box-header with-border">
            <h3 class="box-title">Master Feature About</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            <form method="POST"  action="{{ url('manage_feature/feature_about/save') }}" enctype="multipart/form-data">
              <div class="row">

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Upload Header</label>
                      <div class="col-sm-10">
                        <input type="file" name="header_about" class="form-control" id="exampleInputEmail1" placeholder="Photo" required/>
                      </div>
                    </div>

                    <br>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Posting Date</label>
                      <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker1'>
                          <input type='text' name="created_date" class="form-control _date" required/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Text</label>
                      <div class="col-sm-10">
                        <textarea class="form-control ckeditor" id="editor1" name="text_about" placeholder="Content" class="materialize-textarea" rows="6" required/></textarea>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div style="padding:20px 15px 0 0;" class="pull-right">

                      <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Save and Publish</button>
                    </div>

              </div>
              <br>
            </form>
          </div>
        </div>
        @endif
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header"><h4>Data About</h4></div>
              <div class="box-body table-responsive">
                <table id="master-user" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Created Date</th>
                      <!-- <th>About Header</th> -->
                      <th>Text</th>
                      <th>Modify Date</th>
                      <th>Action</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    @foreach($fabout as $about)
                      <tr>
                        <td>{{$i++}}</td>
                        <!-- <td><img style="max-height: 350px;" src="{{ url('header_about/'.$about->header_about) }}"> </td> -->
                        <td>
                          <?php
                            $date = strtotime($about->created_date);
                            echo date("d-m-Y", $date);
                          ?>
                        </td>
                        <td>
                          <?php
                          $string = strip_tags($about->text_about);

                          if (strlen($string) > 40) {

                              $stringCut = substr($string, 0, 40);
                              $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...';
                          }
                              echo $string;
                          ?>
                        </td>
                        <td>
                          <?php
                            $date = strtotime($about->updated_at);
                            echo date("d-m-Y H:i", $date);
                          ?>
                        </td>

                        <td>
                          <a href="{{ url('manage_feature/feature_about/edit/'.$about->id)}}"><button style="width:90px;" type="button" class="btn btn-info">Edit</button></a>
                        </td>
                        <td>
                          <form style="display: inline-table;" method="POST" action="{{ url('manage_feature/feature_about/delete') }}">
                            <input type="hidden" name="id" value="{{$about->id}}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button style="width:90px;" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this feature?')" type="submit">Delete</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                   </tbody>
                   <tfoot>
                    <tr>
                      <th>No.</th>
                      <th>Created Date</th>
                      <!-- <th>About Header</th> -->
                      <th>Text</th>
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
