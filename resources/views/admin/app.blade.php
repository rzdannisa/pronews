<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if(session('idtype') == "1")
    
        <title>Manage for Admin</title>
    @elseif(session('idtype') == "2")
    
        <title>Manage for Staff</title>
    @elseif(session('idtype') == "")
    
        <title>Manage for Super Admin</title>
    @endif
    
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf_token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ url('adminlte/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('adminlte/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
        <link rel="stylesheet" href="{{ url('adminlte/dist/css/AdminLTE.min.css') }}">
        <script src="{{('css/sweetalert-master/dist/sweetalert.min.js')}}"></script>
        <link rel="stylesheet" type="text/css" href="{{('css/sweetalert-master/dist/sweetalert.css')}}">
        <link rel="stylesheet" href="{{ url('adminlte/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ url('adminlte/plugins/iCheck/flat/blue.css') }}">
        <link rel="stylesheet" href="{{ url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('adminlte/select2/select2.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('adminlte/dtpicker/css/bootstrap-datetimepicker.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('adminlte/plugins/datatables/jquery.dataTables.css') }}">
        <script src="{{ url('adminlte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <script src="{{ url('adminlte/dtpicker/moment.js')}}"></script>
        <script src="{{ url('adminlte/bootstrap/js/transition.js') }}"></script>
        <script src="{{ url('adminlte/bootstrap/js/collapse.js') }}"></script>
        <script src="{{ url('adminlte/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('adminlte/dtpicker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ url('adminlte/dist/js/demo.js') }}"></script>
        <script src="{{ url('adminlte/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ url('adminlte/select2/select2.full.js') }}"></script>
        <script src="{{ url('adminlte/plugins/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ url('adminlte/plugins/datatables/jquery.dataTables.min.css') }}"></script>
        <script src="{{ url('adminlte/plugins/iCheck/icheck.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="{{ url('adminlte/plugins/fastclick/fastclick.min.js') }}"></script>
        <script src="{{ url('adminlte/dist/js/app.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
        <script src="{{ url('adminlte/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ url('adminlte/plugins/chartjs/Chart.min.js') }}"></script>
    
    </head>
    
        <body>
            @yield('content')
        </body>

</html>