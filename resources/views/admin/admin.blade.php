@extends('admin.app')

@section('content')

<body style="font-family: 'Raleway', sans-serif;" class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="{{ url('/') }}" class="logo">
        <span class="logo-mini">
          <b>Culture</b>News

        </span>
        <span class="logo-lg">
          <b>CL</b>N

        </span>
      </a>
      <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

          @include('admin.menu')

      </nav>
    </header>

          @include('admin.sidebar')
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        <div class="admin-seacrh" style="height:2px;">
            </div>
          <p style="font-weight: bold;font-size: 30px">Welcome {{session('type')}} !</p>
        </section>
      </div>
    </div>
  </div>
  <script type="text/javascript">

    $.ajaxSetup({
   headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')}
});
        $('input[name=search_admin]').keyup(function(e){
            setTimeout(function(){
                $('.admin-news').html('<div class="admin-news">Loading...</div>');
                $.ajax({
                    'type': 'GET',
                    'url': '{{url("search_post_admin")}}/'+$('input[name=search_admin]').val(),
                    'success': function(data){
                    if (data) {
                        $('.admin-news').html(data);
                    }else{
                        $('.admin-news').html('<div class="admin-news">Pencarian tidak ditemukan..</div>');
                    }
                    }
                });
            }, 500);
        });


  </script>

@endsection
