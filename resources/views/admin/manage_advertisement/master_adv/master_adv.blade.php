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
          <h3 class="box-title">Master Advertisement</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          <form method="POST"  action="{{ url('manage_advertisement/master_adv/save') }}" enctype="multipart/form-data">

            <div style="margin-bottom: 10px;" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Select Type Advertisement</label>
              <div class="col-xs-10">
                <select id="selecttype" name="lt_id_adv" class="form-control not-res">
                  <option value="">Choose Type</option>
                  @foreach($idadv as $adv)
                  <option value="{{$adv->id}}">{{$adv->name}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <input id="usertp" type="hidden" name="usertp" value="dc1">

            <div style="margin-bottom: 10px;" id="fdc1" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Select User</label>
              <div class="col-xs-10">
                <select name="ms_id_user_adv_dc1" class="form-control not-res">
                  <option value="">Choose Type</option>
                  @foreach($fdc1 as $usr1)
                  <option value="{{$usr1->id}}">{{$usr1->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div style="margin-bottom: 10px;" id="fdc2" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Select User</label>
              <div class="col-xs-10">
                <select name="ms_id_user_adv_dc2" class="form-control not-res">
                  <option value="">Choose Type</option>
                  @foreach($fdc2 as $usr2)
                  <option value="{{$usr2->id}}">{{$usr2->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div style="margin-bottom: 10px;" id="fdc3" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Select User</label>
              <div class="col-xs-10">
                <select name="ms_id_user_adv_dc3" class="form-control not-res">
                  <option value="">Choose Type</option>
                  @foreach($fdc3 as $usr3)
                  <option value="{{$usr3->id}}">{{$usr3->nama}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div style="margin-bottom: 10px;" class="row">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Title</label>
            <div class="col-xs-10">
                <input class="form-control not-res" maxlength="200" type="text" name="title" placeholder="Title" id="address" />
              </div>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div style="margin-bottom: 10px;" id="img" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Image Advertisement</label>
              <div class="col-xs-10">
                <input class="form-control not-res" type="file" name="for_image" placeholder="Title" id="img" />
              </div>
            </div>

            <div style="margin-bottom: 10px;" class="row">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">Posting Date</label>
                <div class="col-xs-10">
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="created_date" class="form-control _date" required/>
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>

              <div id="exp" style="margin-bottom: 10px;" class="row">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">Expiry Date</label>
                <div class="col-xs-10">
                  <div class='input-group date' id='datetimepicker1'>
                    <input type='text' name="expiry_date" class="form-control exp" required/>
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
              </div>

            <div style="margin-bottom: 10px;" id="desc" class="row">
            <label for="exampleInputPassword1" class="col-sm-2 control-label">Description</label>
            <div class="col-xs-10">
                <input class="form-control not-res" type="text" name="for_text" placeholder="Description" id="address" />
              </div>
            </div>

            <div class="row">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">Detail</label>
                <div class="col-sm-10">
                  <textarea class="form-control" name="for_detail_text" placeholder="Content" class="materialize-textarea" rows="6" required/></textarea>
                </div>
              </div>

            <br>
              <div style="padding:20px 15px 0 0;" class="pull-right">
                <button style="width:150px;" type="submit" name="choose" value="suspend" class="btn btn-danger">Save as Suspend</button>
                <button style="width:150px;" type="submit" name="choose" value="hold" class="btn btn-warning">Save as Hold</button>
                <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Save and Publish</button>
              </div>
        </form>
        </div><!-- /.box-body -->
      </div><!-- /.box -->

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"><h4>Data Advertisement</h4></div>
            <div class="box-body table-responsive">
              <table id="master-user" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Created Date</th>
                    <th>Type Advertisement</th>
                    <th>User</th>
                    <th>Expiry Date</th>
                    <th>Description</th>
                    <th>Modify Date</th>
                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  @foreach($fmadv as $adv)
                    @foreach($adv->typeadv as $type)
                      @foreach($adv->userid as $user)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>
                        <?php
                          $date = strtotime($adv->created_date);
                          echo date("d-m-Y", $date);
                        ?>
                      </td>
                      <td>{{$type->name}}</td>
                      <td>{{$user->nama}}</td>
                      <td>{{$adv->expiry}}</td>
                      <td>{{$adv->for_text}}</td>
                      <td>
                        <?php
                          $date = strtotime($adv->updated_at);
                          echo date("d-m-Y H:i", $date);
                        ?>
                      </td>

                      <td>
                        <a href="{{ url('manage_advertisement/master_adv/edit/'.$adv->id)}}"><button style="width:90px;" type="button" class="btn btn-info">Edit</button></a>
                      </td>
                      <td>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_advertisement/master_adv/delete') }}">
                          <input type="hidden" name="id" value="{{$adv->id}}">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button style="width:90px;" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this advertisement?')" type="submit">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  @endforeach
                  @endforeach
                 </tbody>
                 <tfoot>
                  <tr>
                     <th>No.</th>
                    <th>Created Date</th>
                    <th>Type Advertisement</th>
                    <th>User</th>
                    <th>Expiry Date</th>
                    <th>Description</th>
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
</body>
<script type="text/javascript">
        $('#fdc1').hide();
        $('#fdc2').hide();
        $('#fdc3').hide();

        $('#selecttype').change(function(){
        if($(this).val() == "1"){
          $('#fdc1').css("display","block");
          $('#fdc2').hide();
          $('#fdc3').hide();
          $("#usertp").val("dc1");
        }
        else if($(this).val() == "2"){
          $('#fdc1').hide();
          $('#fdc2').css("display","block");
          $('#fdc3').hide();
          $("#usertp").val("dc2");
        }
        else{
          $('#fdc1').hide();
          $('#fdc2').hide();
          $('#fdc3').css("display","block");
          $("#usertp").val("dc3");

        }

      });
$('._date').datetimepicker({ format: 'YYYY-MM-DD' });

$('.exp').datetimepicker({ format: 'YYYY-MM-DD HH:mm:ss' });
</script>
<script type="text/javascript">
        $('#selecttype').change(function(){
        if($(this).val() == "1"){
          $("#img").css("display","block");
          $("#desc").css("display","block");
          $("#exp").css("display","block");
        }
        else if($(this).val() == "2"){
          $("#img").css("display","block");
          $("#desc").css("display","block");
          $("#exp").css("display","block");
        }
        else{
          $("#img").css("display","block");
          $("#desc").css("display","block");
          $("#exp").css("display","block");
        }
      });
</script>
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
@endsection
