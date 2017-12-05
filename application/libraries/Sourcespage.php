<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sourcespage 
{
    function sourceslogincss()
   {
     $ret = '
     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="'.base_url().'appsources/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="'.base_url().'appsources/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="'.base_url().'appsources/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="'.base_url().'appsources/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="'.base_url().'appsources/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     ';
     return $ret;

   } 

   function dashboardcss()
   {
    $ret = '<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="'.base_url().'appsources/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="'.base_url().'appsources/dist/css/skins/_all-skins.min.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="'.base_url().'appsources/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="'.base_url().'appsources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">';
    return $ret;
  
   }


   function sourcesloginjs()
   {
       $ret = '<script src="'.base_url().'appsources/bower_components/jquery/dist/jquery.min.js"></script>
       <!-- Bootstrap 3.3.7 -->
       <script src="'.base_url().'appsources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
       <!-- iCheck -->
       <script src="'.base_url().'appsources/plugins/iCheck/icheck.min.js"></script>
       <script src="'.base_url().'appsources/module/applogin.js"></script>
       <script>
         $(function () {
           $("input").iCheck({
             checkboxClass: "icheckbox_square-blue",
             radioClass: "iradio_square-blue",
             increaseArea: "20%" // optional
           });
         });
       </script>';
       return $ret;
   }

   function dashboardjs()
   {
    $ret = '<script src="'.base_url().'appsources/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="'.base_url().'appsources/bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="'.base_url().'appsources/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="'.base_url().'appsources/bower_components/raphael/raphael.min.js"></script>
    <script src="'.base_url().'appsources/bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="'.base_url().'appsources/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="'.base_url().'appsources/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="'.base_url().'appsources/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="'.base_url().'appsources/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="'.base_url().'appsources/bower_components/moment/min/moment.min.js"></script>
    <script src="'.base_url().'appsources/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="'.base_url().'appsources/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="'.base_url().'appsources/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="'.base_url().'appsources/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="'.base_url().'appsources/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="'.base_url().'appsources/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="'.base_url().'appsources/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="'.base_url().'appsources/dist/js/demo.js"></script>';
    return $ret;
   }
}
?>