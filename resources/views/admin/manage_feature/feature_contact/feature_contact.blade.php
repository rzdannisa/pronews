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

            
              @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
              <div style="width:95%;margin:auto;" class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Master Feature Contact</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                <form method="POST"  action="{{ url('manage_feature/feature_contact/save') }}" enctype="multipart/form-data">
                  <div class="row">  
                      <input id="tyco" type="hidden" name="type_code" value="nip">               
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Select Type</label>
                      <select id="selecttype" name="akses_type" class="form-control not-res">
                        @foreach($fitur as $ft)
                        <option value="{{$ft->id}}">{{$ft->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Title</label>
                      <input type="text" name="title" placeholder="Title" id="title" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Address</label>
                      <input type="text" name="address" placeholder="Address" id="address" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Description</label>
                      <input type="text" name="desc" placeholder="Description" id="desc" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Contact 1</label>
                      <input type="text" name="contact-1" placeholder="Contact 1" id="contact-1" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Contact 2</label>
                      <input type="text" name="contact-2" placeholder="Contact 2" id="contact-2" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">Name Link</label>
                      <input type="text" name="link-name" placeholder="Name Link" id="link-name" />
                    </div>
                  </div>
                  <br>

                  <div id="teacher" class="row">                  
                  <div class="col-xs-6 col-md-4">
                      <label for="exampleInputPassword1">URL</label>
                      <input type="text" name="link-url" placeholder="URL" id="link-url" />
                    </div>
                  </div>
                  <br>

                  <br><br>
                    <div style="padding:20px 15px 0 0;" class="pull-right">
                      <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Save and Publish</button>
                    </div>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              
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
                        <td>{{$contact->desc}}</td>
                        <td>{{$contact->contact-1}}</td>
                        <td>{{$contact->contact-2}}</td>
                        <td>{{$contact->address}}</td>
                        <td>{{$contact->link-name}}</td>
                        <td>{{$contact->link-url}}</td>
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
          $('link-url').hide();
          $('#link-name').hide();
        }
        else if($(this).val() == "parent"){
          $("#parent").css("display","block");
          $('#teacher').hide();
          $('#employee').hide();
          $('#student').hide();
          $('#staff').hide();
          $("#tyco").val("parent");
        }
        else if($(this).val() == "employee"){
          $("#employee").css("display","block");
          $('#teacher').hide();
          $('#parent').hide();
          $('#student').hide();
          $('#staff').hide();
          $("#tyco").val("employee");
        }
        else if($(this).val() == "student"){
          $("#student").css("display","block");
          $('#teacher').hide();
          $('#employee').hide();
          $('#parent').hide();
          $('#staff').hide();
          $("#tyco").val("student");
        }
        else{
          $("#student").hide();
          $('#teacher').hide();
          $('#employee').hide();
          $('#parent').hide();
          $('#staff').css("display","block");
          $("#tyco").val("staff");
        }
      });

</script>

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
