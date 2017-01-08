<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="UTF-8">
  <title>{{$titulo or 'Hansenapp Web | Painel | Tituto Padrao'}}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- Bootstrap 3.3.4 -->
  <link href="{{url('painel/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <!-- Font Awesome Icons -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

  <!-- Select2 -->
  <link rel="stylesheet" href="{{url('painel//plugins/select2/select2.min.css')}}">
  <!-- Theme style -->
  <link href="{{url('painel/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('painel/dist/css/estilos.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('painel/plugins/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{url('painel/plugins/iCheck/all.css')}}" rel="stylesheet">
    <!-- 
    AdminLTE Skins. We have chosen the skin-blue for this starter
    page. However, you can choose any other skin. Make sure you
    apply the skin class to the body tag so the changes take effect.-->
    <link href="{{url('painel/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
       <!-- iCheck for checkboxes and radio inputs -->
     </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
-->
<body class="skin-blue sidebar-mini">
  <div class="wrapper">

    @include('painel.particoes.menu-topo')
    @include('painel.particoes.menu-sidebar')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content-panel')
    </div><!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Layout Adaptado por: Jardel Belisário
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->      
    <aside class="control-sidebar control-sidebar-dark">                
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane active" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class='control-sidebar-menu'>
            <li>
              <a href='javascript::;'>
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>              
          </ul><!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3> 
          <ul class='control-sidebar-menu'>
            <li>
              <a href='javascript::;'>               
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>
                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>                                    
              </a>
            </li>                         
          </ul><!-- /.control-sidebar-menu -->         

        </div><!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">            
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>
            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked />
              </label>
              <p>
                Some information about this general settings option
              </p>
            </div><!-- /.form-group -->
          </form>
        </div><!-- /.tab-pane -->
      </div>
    </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
      immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{url('painel/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{url('painel/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="{{url('painel/plugins/select2/select2.full.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{url('painel/dist/js/app.min.js')}}" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="{{url('painel//plugins/datatables/jquery.dataTables.js')}}" type="text/javascript"></script>
    <script src="{{url('painel/plugins/datatables/dataTables.bootstrap.js')}}" type="text/javascript"></script>

    <script src="{{url('painel/plugins/chartjs/Chart.min.js')}}"></script>

    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{url('painel/plugins/morris/morris.min.js')}}"></script>
    
    <!-- iCheck 1.0.1 -->
    <script src="{{url('painel/plugins/iCheck/icheck.min.js')}}"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
          //Initialize Select2 Elements
          $(".select2").select2();

          $("#example1").DataTable();
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });


          
        });
      </script>

      <!-- SCRIPT PARA PEGAR IMAGEM DO IMPUT -->
      <script language="javascript" type="text/javascript">
        function readURL(input, id) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#'+id)
              .attr('src', e.target.result)
              ;
            }

            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
      
      <!-- SCRIPT PARA CHART -->
      <script>

       $.getJSON( "/panel/usuarios/dados-count", function() {

       })
       .done(function(data) {
        data: [],


        Morris.Donut({
         element: 'sales-chart-acesso',
         resize: true,
            //colors: ["#3c8dbc", "#f56954", "#00a65a"],
            colors: ["#29b6f6", "#80d8ff", "#0288d1"],

            url: 'panel/usuarios/dados',
            type: 'GET',  
            dataType: 'json',

            data: [         
            {label: "Administrador(a)", value: data[0]},
            {label: "Desenvolvedor", value: data[1]},
            {label: "Enfermeiro(a)", value: data[2]},
            ],
            //data: data,
            hideHover: 'auto',
          });

        //console.log(data);
      })
       .fail(function() {
         alert(error);
       });

     </script> 

     <!-- SCRIPT PARA CHART -->
     <script>

       $.getJSON( "/panel/pacientes/dados-count", function() {
       })
       .done(function(data) {
        data: [],
        Morris.Donut({
         element: 'sales-chart-pacientes',
         resize: true,
            //colors: ["#3c8dbc", "#f56954", "#00a65a"],
            colors: ["#00bfa5", "#00a65a"],

            //url: 'panel/usuarios/dados',
            type: 'GET',  
            dataType: 'json',

            data: [         
            {label: "Contatos Cadastrados", value: data[1]},
            {label: "Pacientes Cadastrados", value: data[0]},
            ],
            //data: data,
            hideHover: 'auto',
          });

      })
       .fail(function() {
         alert(error);
       });

     </script>  


     <!-- SCRIPT PARA CHART CONTATO -->
     <script>

       $.getJSON( "/panel/contatos/dados-count", function() {
       })
       .done(function(data) {
        data: [],
        Morris.Donut({
         element: 'sales-chart-contatos',
         resize: true,
            //colors: ["#3c8dbc", "#f56954", "#00a65a"],
            colors: ["#ffd180", "#ff9800"],

            type: 'GET',  
            dataType: 'json',

            data: [         
            {label: "Contatos Não Verificados", value: data[0]},
            {label: "Pacientes Verificados", value: data[1]},
            ],
            //data: data,
            hideHover: 'auto',
          });
      })
       .fail(function() {
         alert(error);
       });

     </script>  



     <!-- SCRIPT PARA CHART UBS-->
     <script>

       $.getJSON( "/panel/ubs/dados-count", function() {
       })
       .done(function(data) {
        data: [],
        Morris.Donut({
         element: 'sales-chart-ubs',
         resize: true,
            //colors: ["#3c8dbc", "#f56954", "#00a65a"],
            colors: ["#bf360c", "#ffab91"],

            url: 'panel/ubs/dados',
            type: 'GET',  
            dataType: 'json',

            data: [         
           // {label: "UBS Cadastradas", value: data[0]},
           {label: "UBS Cadastradas", value: 50},
           {label: "Total de UBS do município", value: data[1]},
           ],
            //data: data,
            hideHover: 'auto',
          });

        //console.log(data);
      })
       .fail(function() {
         alert(error);
       });

     </script>  

     <script>
        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

      </script>

  </body>
</html>
