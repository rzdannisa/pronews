@extends('admin/app')

@section('content')

  <body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="{{ url('manage') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>FJ</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>AL</b> FAJAR</span>
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
                  <blockquote class="master_p">Edit Post</blockquote>
                  <div class="master_post_content">
                    <form method="POST"  action="{{ url('manage_post/update_post') }}" enctype="multipart/form-data">
                    @if(!empty($posts->headline_news))
                      <img style="max-height: 350px;" src="{{ url('headline_news/'.$posts->headline_news) }}">
                      @else
                      <span>Upload headline now!</span>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputPassword1">Headline</label>
                        <input type="file" value="{{$posts->headline_news}}" name="headline_news" class="form-control" id="exampleInputEmail1" placeholder="Photo"/>
                      </div>
                    <br>
                      <label for="exampleInputPassword1">Select a Type</label>
                    <select id="selecttype" name="type_news_id" class="form-control">
                    @foreach($type as $typee)
                      <option value="{{ $typee->id }}">{{ $typee->name }}</option>
                    @endforeach
                    </select>
                  <br>

                  <div id="C" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select name="tr_sub_news_id" class="form-control">
                          @foreach($subC as $C)
                          <option value="{{ $C->id }}">{{ $C->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div id="L" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select name="tr_sub_news_id" class="form-control">
                          @foreach($subL as $L)
                          <option value="{{ $L->id }}">{{ $L->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div id="S" class="form-group">
                      <label for="exampleInputPassword1" class="col-sm-2 control-label">Sub Type</label>
                      <div class="col-sm-10">
                        <select name="tr_sub_news_id" class="form-control">
                          @foreach($subS as $S)
                          <option value="{{ $S->id }}">{{ $S->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Title</label>
                      <input type="text" value="{{$posts->news_title}}" name="news_title" class="form-control" id="exampleInputEmail1" placeholder="Title" required/>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                <br>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Created Date</label>
                      <div class='input-group date' id='datetimepicker1'>
                        <input type='text' value="{{$posts->created_date}}" name="created_date" class="form-control _date" required/>
                          <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                    </div>
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
          <label for="exampleInputPassword1">News Desc</label>
          <input type="text" name="news_desc" value="{{$posts->news_desc}}" class="form-control not-res" maxlength="100" placeholder="News Desc" onkeyup="this.value = minmaxname(this.value, 0, 100)" required/>
        </div>
    <br>
    <input type="hidden" name="id" value="{{$posts->id}}">
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <textarea class="form-control ckeditor" id="editor1" name="content" placeholder="Content" class="materialize-textarea" rows="6" required/>{{$posts->content}}</textarea>
        </div>
      <br><br>
        <button type="submit" name="choose" value="publish" class="btn btn-primary pull-right" style="margin-left: 10px;">Update Post</button>
        <button type="submit" name="choose" value="draft" class="btn btn-warning pull-right" style="margin-left: 10px;">Save as Draft</button>
        <button type="submit" name="choose" value="suspend" class="btn btn-danger pull-right">Suspend Article</button>
      </form>
    </div>

</div>
</div>
</div>

<script type="text/javascript">
 $('.for_date').datetimepicker({ format: 'YYYY-MM-DD HH:mm:ss' });
  // $(".for_date").datepicker();
      $('#selecttype').change(function(){
        if($(this).val() == "agenda"){
          $('#inputdate').show();
        }
        else{
          $('#inputdate').hide();
        }
      });
      </script>
<script type="text/javascript">
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
</script>


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