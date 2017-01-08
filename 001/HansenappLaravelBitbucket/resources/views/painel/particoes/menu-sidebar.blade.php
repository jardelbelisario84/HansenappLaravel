<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
       <!--  <img src="{{url('painel/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" /> -->

       @if(Auth::user()->foto)
       <img class="img-circle" src="{{url(Auth::user()->foto)}}" alt="User Avatar">
       @else
       <img class="img-circle" src="{{url('painel/dist/img/avatar.png')}}" alt="User Avatar">
       @endif 
     </div>
     <div class="pull-left info">
      <p>{{Auth::user()->name}}</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search..."/>
      <span class="input-group-btn">
        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="treeview">
      <a href="/panel">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-users"></i> <span>Usuários</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/panel/usuarios"><i class="fa fa-circle-o"></i> Ver Usuários</a></li>
        <li><a href="/panel/usuarios/adicionar"><i class="fa fa-circle-o"></i> Adicionar Novo</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="">
        <i class="fa fa-user-md"></i> <span>Pacientes</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/panel/pacientes"><i class="fa fa-circle-o"></i> Ver Pacientes</a></li>
        <li><a href="/panel/pacientes/adicionar"><i class="fa fa-circle-o"></i> Adicionar Novo</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-child"></i> <span>Familiares/Contatos</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/panel/contatos"><i class="fa fa-circle-o"></i> Ver Famialiares</a></li>
        <li><a href="/panel/contatos/adicionar"><i class="fa fa-circle-o"></i> Adicionar Novo</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="#">
        <i class="fa fa-hospital-o"></i> <span>UBS</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="/panel/ubs"><i class="fa fa-circle-o"></i> Ver todas</a></li>
        <li><a href="/panel/ubs/adicionar"><i class="fa fa-circle-o"></i> Adicionar Nova</a></li>
      </ul>
    </li>

  </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>