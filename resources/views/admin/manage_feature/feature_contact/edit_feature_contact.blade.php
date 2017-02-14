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
            <h3 class="box-title">Edit Feature Contact</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
            <div class="box-body">
              <form method="POST"  action="{{ url('manage_feature/feature_contact/update') }}" enctype="multipart/form-data">
              <div style="margin-bottom: 10px;" class="row">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">Select Type</label>
              <div class="col-md-10">

                  <select id="selecttype" name="id_type" class="form-control not-res" required>
                    <option value="">Select Type</option>
                    @foreach($fitur as $ft)
                    <option value="{{$ft->id}}">{{$ft->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="id" value="{{ $edit->id }}">
              <div style="margin-bottom: 10px;" id="title" class="row">
                <label for="exampleInputPassword1" class="col-sm-2 control-label">Title</label>
              <div class="col-md-10">

                  <input class="form-control not-res" value="{{$edit->title}}" type="text" name="title" placeholder="Title" id="title" />
                </div>
              </div>

              <div style="margin-bottom: 10px;" class="row">
                  <label for="exampleInputPassword1" class="col-sm-2 control-label">Posting Date</label>
                  <div class="col-md-10">
                    <div class='input-group date' id='datetimepicker1'>
                      <input value="{{$edit->created_date}}" type='text' name="created_date" class="form-control _date" required/>
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                  </div>
                </div>

              <div style="margin-bottom: 10px;" id="address" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Address</label>
              <div class="col-md-10">

                  <input value="{{$edit->address}}" class="form-control not-res" type="text" name="address" placeholder="Address" id="address" />
                </div>
              </div>


              <div style="margin-bottom: 10px;" id="desc" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Description</label>
              <div class="col-md-10">
                  <input value="{{$edit->desc}}" class="form-control not-res" type="text" name="desc" placeholder="Description" id="desc" />
                </div>
              </div>


              <div style="margin-bottom: 10px;" id="contact-1" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Contact 1</label>
              <div class="col-md-10">

                  <input value="{{$edit->contact_1}}" class="form-control not-res" type="text" name="contact-1" placeholder="Contact 1" id="contact-1" />
                </div>
              </div>


              <div style="margin-bottom: 10px;" id="contact-2" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Contact 2</label>
              <div class="col-md-10">

                  <input value="{{$edit->contact_2}}" class="form-control not-res" type="text" name="contact-2" placeholder="Contact 2" id="contact-2" />
                </div>
              </div>


              <div style="margin-bottom: 10px;" id="link-name" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">Name Link</label>
              <div class="col-md-10">

                  <input value="{{$edit->link_name}}" class="form-control not-res" type="text" name="link-name" placeholder="Name Link" id="link-name" />
                </div>
              </div>


              <div style="margin-bottom: 10px;" id="link-url" class="row">
              <label for="exampleInputPassword1" class="col-sm-2 control-label">URL</label>
              <div class="col-md-10">

                  <input value="{{$edit->link_url}}" class="form-control not-res" type="text" name="link-url" placeholder="URL" id="link-url" />
                </div>
              </div>
              <br>
                <div class="pull-right">
                  <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Update and Publish</button>
                </div>
            </form>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
        <div class="row">
          <div class="col-xs-12">
          <div class="box">
            <div class="box-body table-responsive">
              <table id="master-user" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Created Date</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Contact 1</th>
                    <th>Contact 2</th>
                    <th>Address</th>
                    <th>Link Name</th>
                    <th>Link Url</th>
                    <th>Modify Date</th>
                    <th>Action</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1; ?>
                  @foreach($fcontact as $contact)
                    <tr>
                      <td>{{$i++}}</td>
                      <td>
                        <?php
                          $date = strtotime($contact->created_date);
                          echo date("d-m-Y", $date);
                        ?>
                      </td>
                      <td>{{$contact->id_type}}</td>
                      <td>{{$contact->title}}</td>
                      <td>
                        <?php
                          $desc = substr($contact->desc, 0, 50);
                          echo $desc.'...';
                        ?>
                      </td>
                      <td>{{$contact->contact_1}}</td>
                      <td>{{$contact->contact_2}}</td>
                      <td>{{$contact->address}}</td>
                      <td>{{$contact->link_name}}</td>
                      <td>{{$contact->link_url}}</td>
                      <td>
                        <?php
                          $date = strtotime($contact->updated_at);
                          echo date("d-m-Y H:i", $date);
                        ?>
                      </td>

                      <td>
                        <a href="{{ url('manage_feature/feature_contact/edit/'.$contact->id)}}"><button style="width:90px;" type="button" class="btn btn-info">Edit</button></a>
                      </td>
                      <td>
                        <form style="display: inline-table;" method="POST" action="{{ url('manage_feature/feature_contact/delete') }}">
                          <input type="hidden" name="id" value="{{$contact->id}}">
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
                    <th>Type</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Contact 1</th>
                    <th>Contact 2</th>
                    <th>Address</th>
                    <th>Link Name</th>
                    <th>Link Url</th>
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

</div>
</body>
<script type="text/javascript">
        $('#selecttype').change(function(){
        if($(this).val() == "1"){
          $("#title").css("display","block");
          $("#desc").css("display","block");
          $('#contact-1').hide();
          $('#contact-2').hide();
          $('#address').hide();
          $('#link-url').hide();
          $('#link-name').hide();
        }
        else if($(this).val() == "2"){
          $("#title").css("display","block");
          $("#desc").hide();
          $('#contact-1').css("display","block");
          $('#contact-2').css("display","block");
          $('#address').hide();
          $('#link-url').css("display","block");
          $('#link-name').css("display","block");
        }
        else if($(this).val() == "3"){
          $("#title").css("display","block");
          $("#desc").hide();
          $('#contact-1').hide();
          $('#contact-2').hide();
          $('#address').css("display","block");
          $('#link-url').css("display","block");
          $('#link-name').css("display","block");
        }
        else{
          $("#title").css("display","block");
          $("#desc").css("display","block");
          $('#contact-1').hide();
          $('#contact-2').hide();
          $('#address').hide();
          $('#link-url').css("display","block");
          $('#link-name').css("display","block");
        }
      });
$('._date').datetimepicker({ format: 'YYYY-MM-DD' });
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
@endsection
