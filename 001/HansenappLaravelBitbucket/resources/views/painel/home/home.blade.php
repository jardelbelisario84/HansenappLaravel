@extends('painel.layout')
@section('content-panel')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		DASHBOARD
		<small>Dados gerais</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
		<li class="active">Here</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $usuarios }}</h3>
          <p>Usuários</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-stalker"></i>
        </div>
        <a href="/panel/usuarios" class="small-box-footer">Mais informações <i class="fa fa-arro -circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{$pacientes}}<!-- <sup style="font-size: 20px">%</sup> --></h3>
          <p>Pacientes</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/panel/pacientes" class="small-box-footer">Mais informações info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{$contatos}}</h3>
          <p>Contatos/Familiares</p>
        </div>
        <div class="icon">
          <i class="ion ion-clipboard"></i>
        </div>
        <a href="/panel/contatos"class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{$ubs}}</h3>
          <p>UBS</p>
        </div>
        <div class="icon">
          <i class="ion ion-medkit"></i>
        </div>
        <a href="/panel/ubs" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div><!-- ./col -->
  </div><!-- /.row -->

  <!-- Main row INFO-->
  <div class="row">
    <section class="col-lg-12 connectedSortable">
      <div class="dashboard-box">
        <div class="dashboard-topo topo-info">
          USUÁRIOS
        </div>
        <div class="col-md-6">
        <br><br>
          <div class="box justificado">
            <div class="box-header with-border">
              <br>
              <h3 class="box-title">HANSENAPP - USUÁRIOS</h3><br><br>
              <p>Usuários serão tratados como  <b>3 níveis de Acesso:</b>  Desenvolvedor, Administrador e Enfermeiros.</p>
              <p><b>Enfermeiros</b>, terão como nível de acesso a gestão de pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar tanto pacientes quanto os "contatos".  </p>
              <p><b>Administradores</b>, terão como nível de acesso, a gestão de enfermeiros,  pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar  enfermeiros, pacientes e "contatos". </p>

              <p><b>Desenvolvedor</b>, terá como nível de acesso, a gestão de administradores, enfermeiros,  pacientes e contatos/familiares. Este, pode cadastrar, editar e deletar  administradores,enfermeiros, pacientes e "contatos". </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <br><br>
          <!-- DONUT CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Nível de Acesso</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart-acesso" style="height: 300px; position: relative;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->  

        </div>
      </div>
    </section>
  </div><!-- /.row (main row info) -->


  <!-- Main row success-->
  <div class="row">
    <section class="col-lg-12 connectedSortable">
      <div class="dashboard-box">
        <div class="dashboard-topo topo-success">
          PACIENTES
        </div>
        <div class="col-md-6">
        <br><br>
          <div class="box justificado">
            <div class="box-header with-border">
              <br>
              <h3 class="box-title">HANSENAPP - PACIENTES</h3><br><br>
              <p>Aqui estão os dados referentes a quantidade de <b>pacientes</b> cadastrados assim como a quantidade de <b>"contatos"</b> cadastrados.</p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <br><br>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Pacientes</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart-pacientes" style="height: 300px; position: relative;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->  

        </div>
        <!-- /.col-md-6 -->  
      </section><!-- right col -->
    </div><!-- /.row (main row success) -->

    <!-- Main row warning-->
    <div class="row">
      <section class="col-lg-12 connectedSortable">
        <div class="dashboard-box">
          <div class="dashboard-topo topo-warning">
           CONTATOS / FAMILIARES
         </div>

         <div class="col-md-6">
         <br><br>
          <div class="box justificado">
            <div class="box-header with-border">
              <br>
              <h3 class="box-title">HANSENAPP - CONTATOS / FAMILIARES</h3><br><br>
              <p>Usuários serão tratados como  <b>3 níveis de Acesso:</b>  Desenvolvedor, Administrador e Enfermeiros.</p>
              <p><b>Enfermeiros</b>, terão como nível de acesso a gestão de pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar tanto pacientes quanto os "contatos".  </p>
              <p><b>Administradores</b>, terão como nível de acesso, a gestão de enfermeiros,  pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar  enfermeiros, pacientes e "contatos". </p>

              <p><b>Desenvolvedor</b>, terá como nível de acesso, a gestão de administradores, enfermeiros,  pacientes e contatos/familiares. Este, pode cadastrar, editar e deletar  administradores,enfermeiros, pacientes e "contatos". </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <br><br>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Contatos / Familiares</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart-contatos" style="height: 300px; position: relative;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->  

        </div>
        <!-- /.col-md-6 -->  

      </div>
    </section>
  </div><!-- /.row (main row warning) -->


  <!-- Main row danger-->
  <div class="row">
    <section class="col-lg-12 connectedSortable">
      <div class="dashboard-box">
        <div class="dashboard-topo topo-danger">
          UBS
        </div>
          
        <div class="col-md-6">
          <br><br>
          <div class="box justificado">
            <div class="box-header with-border">
            <br>
              <h3 class="box-title">HANSENAPP - UBS</h3><br><br>
              <p>Usuários serão tratados como  <b>3 níveis de Acesso:</b>  Desenvolvedor, Administrador e Enfermeiros.</p>
              <p><b>Enfermeiros</b>, terão como nível de acesso a gestão de pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar tanto pacientes quanto os "contatos".  </p>
              <p><b>Administradores</b>, terão como nível de acesso, a gestão de enfermeiros,  pacientes e contatos/familiares. Estes, podem cadastrar, editar e deletar  enfermeiros, pacientes e "contatos". </p>

              <p><b>Desenvolvedor</b>, terá como nível de acesso, a gestão de administradores, enfermeiros,  pacientes e contatos/familiares. Este, pode cadastrar, editar e deletar  administradores,enfermeiros, pacientes e "contatos". </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <br><br>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">UBS</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body chart-responsive">
              <div class="chart" id="sales-chart-ubs" style="height: 300px; position: relative;"></div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->  

        </div>
        <!-- /.col-md-6 -->  

      </div>
    </section><!-- right col -->
  </div><!-- /.row (main row danger-->

</section><!-- /.section -->
@endsection