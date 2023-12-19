<!DOCTYPE html>
<html>

  <head>

    @include('Admin.css.main_css')
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      
    <![endif]-->
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="index2.html" class="logo"><b>Admin</b>LTE</a>
        @include('Admin.layouts.navbar')
       
      </header>
      
       <!-- Left side column. contains the logo and sidebar -->
       @include('Admin.layouts.sidebar')

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
         @yield('content')

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

     
     
    </div><!-- /.content-wrapper -->

     
     
@include('Admin.layouts.footer')
    </div> 
    
   
   <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
   <!-- Bootstrap 3.3.2 JS -->
   <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <!-- FastClick -->
   <script src='plugins/fastclick/fastclick.min.js'></script>
   <!-- AdminLTE App -->
   <script src="dist/js/app.min.js" type="text/javascript"></script>
   <!-- Sparkline -->
   <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
   <!-- jvectormap -->
   <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
   <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
   <!-- daterangepicker -->
   <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
   <!-- datepicker -->
   <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
   <!-- iCheck -->
   <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
   <!-- SlimScroll 1.3.0 -->
   <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <!-- ChartJS 1.0.1 -->
   <script src="plugins/chartjs/Chart.min.js" type="text/javascript"></script>

   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="dist/js/pages/dashboard2.js" type="text/javascript"></script>

   <!-- AdminLTE for demo purposes -->
   <script src="dist/js/demo.js" type="text/javascript"></script>
  
  </body>
</html>