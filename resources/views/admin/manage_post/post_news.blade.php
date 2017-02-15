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
          <div class="box box-default">
        		<div class="box-header with-border">
        			<h3 class="box-title">Please complete the form below to complete a posting process.</h3>
        		</div><!-- /.box-header -->
            <div class="box-body">
  	          <div class="row">
                <form method="POST"  action="{{ url('manage_post/add_post') }}" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Type News</label>
                      <div class="col-sm-10">
                        <select style="margin-bottom: 10px;" id="selecttype" name="type_news_id" class="form-control" required>
                          <option value="">----Select Type----</option>
                          @foreach($type as $typee)
                          <option value="{{ $typee->id }}">{{ $typee->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div id="C" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select style="margin-bottom: 10px;" name="tr_sub_news_id" class="form-control">
                          @foreach($subC as $C)
                          <option value="{{ $C->id }}">{{ $C->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div id="L" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select style="margin-bottom: 10px;" name="tr_sub_news_id" class="form-control">
                          @foreach($subL as $L)
                          <option value="{{ $L->id }}">{{ $L->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div id="S" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select style="margin-bottom: 10px;" name="tr_sub_news_id" class="form-control">
                          @foreach($subS as $S)
                          <option value="{{ $S->id }}">{{ $S->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Title</label>
                      <div class="col-sm-10">
                        <input style="margin-bottom: 10px;" type="text" name="news_title" class="form-control" id="exampleInputEmail1" placeholder="Title" required/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Headline News</label>
                      <div class="col-sm-10">
                        <input style="margin-bottom: 10px;" type="file" name="headline_news" class="form-control" id="exampleInputEmail1" placeholder="Photo" required/>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Posting Date</label>
                      <div class="col-sm-10">
                        <div class='input-group date' id='datetimepicker1'>
                          <input style="margin-bottom: 10px;" type='text' name="created_date" class="form-control _date" required/>
                            <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                      </div>
                    </div>

                    <br>
                    <br>

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

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">News Description</label>
                      <div class="col-sm-10">
                        <input style="margin-bottom: 10px;" type="text" name="news_desc" class="form-control not-res" maxlength="100" placeholder="News Description" onkeyup="this.value = minmaxname(this.value, 0, 100)" required/>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Content</label>
                      <div class="col-sm-10">
                        <textarea style="margin-bottom: 10px;" class="form-control ckeditor" id="editor1" name="content" placeholder="Content" class="materialize-textarea" rows="6" required/></textarea>
                      </div>
                    </div>

                    <br>
                    <br>

                    <div style="padding:20px 15px 0 0;" class="pull-right">
                      <button style="width:150px;" type="submit" name="choose" value="draft" class="btn btn-warning">Save as Draft</button>
                      <button style="width:150px;" type="submit" name="choose" value="publish" class="btn btn-primary">Save and Publish</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      </div>
        </section>
    </div>

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


  <script type="text/javascript">
        $('#selecttype').change(function(){
        if($(this).val() == "1"){
          $("#C").css("display","block");
          $('#L').hide();
          $('#S').hide();
        }
        else if($(this).val() == "2"){
          $("#C").hide();
          $('#L').css("display","block");
          $('#S').hide();
        }
        else{
          $("#C").hide();
          $('#L').hide();
          $('#S').css("display","block");
        }
      });
</script>
@endsection
