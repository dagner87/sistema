<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel de Gerencia Key</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="<?php echo base_url();?>plantillas/favicon.ico">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>plantillas/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>plantillas/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>plantillas/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>plantillas/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
 

<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url();?>comprador" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>Key</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Key Solutions</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Pedidos en transito-->          
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-truck"></i>
              <span class="label label-warning"><?= $count_entransito ;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Admin
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!--En aduana-->
          <li class="dropdown messages-menu">
            <a href='' class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-institution "></i>
              <span class="label label-info"><?= $count_enaduana ;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Admin
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?php echo base_url();?>plantillas/dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
        
          <!-- Pedidos Pendientes -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-danger"><?= $count_pendientes; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>

          <!-- Pedidos completados -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-success"><?= $count_completado ;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src='<?= base_url('assets/uploads/files').'/'. $this->session->userdata('img') ?>' class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('nombre');?> </span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src='<?= base_url('assets/uploads/files').'/'. $this->session->userdata('img') ?>' class="img-circle" alt="User Image">

                <p>
                  <?= $this->session->userdata('username');?> - <?= $this->session->userdata('description');?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!--div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div-->
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>salir" class="btn btn-default btn-flat">
                  <i class="glyphicon glyphicon-log-out text-red"></i> <span>Salir</span>
                  </a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!--li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src='<?= base_url('assets/uploads/files').'/'. $this->session->userdata('img') ?>' class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('nombre');?> </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar MENU: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       <?php if ($this->session->userdata('perfil') == 'administrador'): ?>
       
        <li class="treeview <?php if($this->uri->segment(2)=='proveedor'|| $this->uri->segment(2)=='clientes'|| $this->uri->segment(2)=='categorias'|| $this->uri->segment(2)=='productos'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-folder-open text-aqua"></i>
            <span>Proveedores</span>
            
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='<?php echo site_url('comprador/categorias')?>'><i class="fa fa-tags text-red"></i> Categorias</a></li>
            <li><a href='<?php echo site_url('comprador/productos')?>'><i class="fa fa-plus text-yellow"></i> Productos</a></li>
            <li><a href='<?php echo site_url('comprador/proveedor')?>'><i class="fa fa-circle-o text-yellow"></i> Proveedores</a></li>
            <li><a href='<?php echo site_url('comprador/clientes')?>'><i class="fa fa-user-plus text-yellow"></i> Clientes</a></li>
          </ul>
        </li>

        <li class="treeview <?php if($this->uri->segment(2)=='paquete'||$this->uri->segment(2)=='pedido_proveedor'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-industry"></i>
            <span>Pedido</span>
            
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='<?php echo site_url('comprador/pedido_proveedor/add')?>'><i class="fa fa-file-text-o text-aqua"></i> Nuevo Pedido</a></li>
            <li><a href='<?php echo site_url('comprador/pedido_proveedor')?>'><i class="fa fa-circle-o text-red"></i> Listar Pedido</a></li>
            <li><a href='<?php echo site_url('comprador/paquete/add')?>'><i class="fa fa-cart-plus text-aqua"></i> Armar Paquete de Envio</a></li>
            <li><a href='<?php echo site_url('comprador/paquete')?>'><i class="fa fa-circle-o text-red"></i> Listar Paquetes</a></li>
          </ul>
        </li>

        <li class="treeview <?php if($this->uri->segment(2)=='transporte_aduana' || $this->uri->segment(2)=='transporte'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-truck text-aqua"></i>
            <span>Terrestre</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
             <li><a href='<?php echo site_url('comprador/transporte/add')?>'><i class="fa fa-circle-o text-aqua"></i>Asignar Transporte</a></li>
              <li><a href='<?php echo site_url('comprador/transporte')?>'><i class="fa fa-circle-o text-aqua"></i> Listar Transporte    <span class="label pull-right bg-yellow"><?= $count_entransito ;?></span></a> 
              </li>
              <li><a href='<?php echo site_url('comprador/transporte_aduana')?>'><i class="fa fa-circle-o text-aqua"></i> Aduana <span class="label pull-right bg-blue"><?= $count_enaduana ;?></span></a></li>
            </ul> 
          
        </li>
        <li class="treeview <?php if($this->uri->segment(2)=='transporte_aereo'){echo 'active';}?>">
           <a href="#">
            <i class="fa fa-plane text-yellow"></i>
            <span>Aereo</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='<?php echo site_url('comprador/transporte_aereo')?>'><i class="fa fa-circle-o text-yellow"></i>Transito Aereo</a></li>
          </ul>
        </li>
        <li>
          <a href='<?php echo site_url('comprador/mercaderia_key')?>'>
            <i class="fa fa-laptop text-aqua"></i> <span>Pedidos Key</span>
           
          </a>
        </li>
   <?php endif; ?>

        <li><a href='<?php echo site_url('gerencia/propuestas')?>' id="">
            <i class="fa fa-file-text"></i>Propuestas </a></li>
         <li class="treeview  <?php if($this->uri->segment(2)=='facturas_proveedores'){echo 'active';}?>">
          <a href="#" id="">
            <i class="fa fa-clipboard"></i>
            <span>Cuentas x Pagar</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href='<?php echo site_url('gerencia/facturas_proveedores')?>' id="" onClick="">
            <i class="fa fa-file-text"></i>Proveedores </a></li>
           
            <li><a href='<?php echo site_url('gerencia/facturas_transpExt')?>' id="" onClick="">
            <i class="fa fa-file-text"></i>Transporte Ext</a></li>
           
            <li><a href='<?php echo site_url('gerencia/facturas_aduanaPeru')?>' id="" onClick="">
            <i class="fa fa-file-text"></i>Aduana Perú</a></li>

            <li><a href='<?php echo site_url('gerencia/facturas_aduanaBol')?>' id="" onClick="">
            <i class="fa fa-file-text"></i>Aduana Bolivia</a></li>
           
            <li><a href='<?php echo site_url('gerencia/facturas_transpInt')?>' id="" onClick="">
            <i class="fa fa-file-text"></i>Transporte Int </a></li>
          </ul>
        </li>
       <li class="treeview <?php if($this->uri->segment(2)=='reporte'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-bar-chart-o"></i>
            <span>Reportes</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">

           <li><a href='<?php echo site_url('gerencia/reportes')?>' id="ver_reporte" onClick=""><i class="fa fa-circle-o"></i>Reporte</a></li>
           <li><a href='<?php echo site_url('gerencia/reportes_generales')?>' id="ver_reporte_general" onClick=""><i class="fa fa-circle-o"></i>Reporte de Tiempos</a></li>
         
         
          </ul>
        </li>

        
        <!--li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Gr&aacute;ficas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            
            <li><a href="<?php //echo base_url();?>plantillas/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?php //echo base_url();?>plantillas/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?php //echo base_url();?>plantillas/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
          </ul>
        </li -->
        <li>
          <a href="<?php echo base_url();?>salir">
            <i class="glyphicon glyphicon-log-out text-red"></i> <span>Salir</span>
           
          </a>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Dashboard
        <small>Panel de Control</small>
      </h1>
      
      <ol class="breadcrumb">
         <?php
                if($output != NULL && $breadcrum != NULL)
                   {
                foreach($breadcrum as $item=>$valor)
                  {?>
                  <li><a href="<?php echo site_url("comprador/".$item); ?>"><i class="fa fa-dashboard"></i><?php echo $valor ; ?></a></li>
                  
                  <?php
                  }
                   
                ?>
                 <li class="active"><?php if($breadcrum_actual != NULL){ echo $breadcrum_actual;} } ?></li>
      </ol>

    </section>

      
        <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $count_PenSolicitado ;?></h3>

              <p>Nuevos Pedidos</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href='<?php echo site_url('panel/pedido_proveedor')?>' class="small-box-footer">Info<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Ventas</p>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Estad&iacute;sticas</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
        <!--Trablas-->
      <div class="row">
      <!--Mercadería Solicitada-->
      <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title"><strong>Mercadería Solicitada</strong></h3>

              <!--div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div-->
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
              <table id="tabla_solicitado" class="table table-bordered table-striped">
                <tr>
                  <th>Fecha Solicitud</th>
                  <th>Productos</th>
                  <th>Cantidad</th>
                  <th>Fecha Entrega</th>
                </tr>
                <?php  
                if (empty($arraypedidos_solitados)!="false")
                  {
                foreach($arraypedidos_solitados as $item): 
                       $fecha_pedido =    date("d/m/Y",strtotime($item->fecha_pedido));

                  ?>
                <tr>
                  <td><?= $fecha_pedido;?></td>
                  <td><?= $item->nombre_producto;?></td>
                  <td><?= $item->cantidad_solicitada;?></td>
                 <?php 
                 $fecha_actual = date("Y-m-d");
                 $fecha_entrega = $item->fecha_entrega;
                 if($fecha_actual >= $fecha_entrega)
                   {
                       $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                    ?> 
                    <td><span style='font-size: 1em;' class="badge bg-red"><?= $fecha_entrega;?></span></td>
                   <?php
                   }else{
                       $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                   ?>                    
                  <td><span style='font-size: 1em;' class="badge bg-light-blue"><?= $fecha_entrega;?></span></td>
                 <?php  }?> 
                  
                </tr>
               
                 <?php endforeach; }else{echo "<td colspan='4' align='center'><div class=''><span style='font-size: 1em;color:red'>No Hay datos q mostrar </span></div></td>";}?>

              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
       <!--Mercadería en Transito-->
      <div class="col-md-6">
          <div class="box box-warning ">
            <div class="box-header">
              <h3 class="box-title"><strong>Mercadería en Transito</strong></h3>

              <!--div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div-->
            </div>
            <!-- /.box-header -->
             <div class="box-body">
              <table id="tabla_transito" class="table table-bordered table-striped">
                <tr>
                  <th style="">No.Factura</th>
                  <th>Productos</th>
                  <th>Cantidad</th>
                  <th>Fecha llegada Aduana</th>
                </tr>
                <?php  
                  if (empty($arraypedidos_transito)!="false")
                  {
                  $tren['vagon_datosTrasito'] = NULL;    
                  foreach($arraypedidos_transito as $item):
                      $row = $this->modelogeneral->tomar_pedido($item->id_pedido_prov); 
                      $tren['vagon_paquete_transito']   = $this->modelogeneral->buscar_paquete_transito($row->id_paquete);
                      
                      if($tren['vagon_paquete_transito'] != NULL){
                                 
                        $tren['vagon_datosTrasito'] = $this->modelogeneral->buscar_dato_transito($tren['vagon_paquete_transito'] ->id_transporte_ext);   
                      }
                    
                    $row_datospaquete = $this->modelogeneral->buscar_datos_paquete($row->id_paquete);
                    ?>

                  <tr>
                     <?php if ($row_datospaquete->factura_doc != null) {?>
                    <td >
                      <a target='_blank' title="Ver factura adjunta" href='<?= base_url('assets/uploads/respaldos').'/'. $row_datospaquete->factura_doc ?>'><?= $row_datospaquete->no_factura;?></a>
                    </td>    
                      <?php }else {?>
                         <td ><?= $row_datospaquete->no_factura;?></td>  
                      <?php } ?>
                    <td><?= $item->nombre_producto;?></td>
                    <td><?= $item->cantidad_solicitada;?></td>
                   <?php 
                   $fecha_actual = date("Y-m-d");

                   if($row_datospaquete->via_transporte !== "aereo")
                     {

                      if($tren['vagon_datosTrasito'] != NULL)
                      {
                         if ($tren['vagon_datosTrasito']->fecha_llegada_aduana != NULL){
                             $fecha_entrega = $tren['vagon_datosTrasito']->fecha_llegada_aduana;
                              if($fecha_actual >= $fecha_entrega)
                               {

                                 $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                                ?> 
                                <td><span style='font-size: 1em;' class="badge bg-red"><?= $fecha_entrega;?></span></td>
                               <?php
                               }else{
                                $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                               ?>                    
                              <td><span style='font-size: 1em;' class="badge bg-light-yellow"><?= $fecha_entrega;?></span></td>
                              <?php }
                            }
                       }else{
                          echo "<td colspan='4' align='left'><div class=''><span style='font-size: 1em;color:red'>No se ha asignado Transporte</span></div></td><br>";
                           }
                   
                        
                      }else
                             {
                            echo "<td colspan='4' align='left'><div class=''><span style='font-size: 1em;color:blue'>Aereo</span></div></td><br>";
                             }
                                
                    
                
                    ?>
                  </tr>
                 
                 <?php endforeach; }else{echo "<td colspan='4' align='center'><div class=''><span style='font-size: 1em;color:red'>No Hay datos q mostrar </span></div></td>";}?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!--Mercadería en Aduana-->
      <div class="col-md-6">
        <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title"><strong> Mercadería en Aduana </strong></h3>

              <!--div class="box-tools">
                <ul class="pagination pagination-sm no-margin pull-right">
                  <li><a href="#">&laquo;</a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div-->
            </div>
            <!-- /.box-header -->
            <div class="box-body ">
               <table id="tabla_aduana" class="table table-bordered table-striped">
                <tr>
                  <th>No.Factura</th>
                  <th>Productos</th>
                  <th>Cantidad</th>
                  <th>Fecha llegada Aduana</th>
                </tr>
                <?php  
                  if (empty($arraypedidos_aduana)!="false")
                  {
                  $tren['vagon_datosTrasito'] = NULL;    
                  foreach($arraypedidos_aduana as $item):
                      $row                    = $this->modelogeneral->tomar_pedido($item->id_pedido_prov); 
                      $tren['vagon_paquete_transito']   = $this->modelogeneral->buscar_paquete_transito($row->id_paquete);
                      
                      if($tren['vagon_paquete_transito'] != NULL){
                      //echo  var_dump($row_paquete->id_transporte_ext);                    
                        $tren['vagon_datosTrasito'] = $this->modelogeneral->buscar_dato_transito($tren['vagon_paquete_transito'] ->id_transporte_ext);   
                      }
                    
                    $row_datospaquete = $this->modelogeneral->buscar_datos_paquete($row->id_paquete);
                    ?>

                  <tr>
                     <?php if ($row_datospaquete->factura_doc != null) {?>
                    <td >
                      <a target='_blank' title="Ver factura adjunta" href='<?= base_url('assets/uploads/respaldos').'/'. $row_datospaquete->factura_doc ?>'><?= $row_datospaquete->no_factura;?></a>
                    </td>    
                      <?php }else {?>
                         <td ><?= $row_datospaquete->no_factura;?></td>  
                      <?php } ?>
                    <td><?= $item->nombre_producto;?></td>
                    <td><?= $item->cantidad_solicitada;?></td>
                   <?php 
                   $fecha_actual = date("Y-m-d");
                   if($tren['vagon_datosTrasito'] != NULL){
                         if ($tren['vagon_datosTrasito']->fecha_llegada_aduana != NULL){
                             $fecha_entrega = $tren['vagon_datosTrasito']->fecha_llegada_aduana;
                              if($fecha_actual >= $fecha_entrega)
                               {
                                $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                                ?> 
                                <td><span style='font-size: 1em;' class="badge bg-red"><?= $fecha_entrega;?></span></td>
                               <?php
                               }else{
                                 $fecha_entrega =    date("d/m/Y",strtotime($fecha_entrega));
                               ?>                    
                              <td><span style='font-size: 1em;' class="badge bg-light-yellow"><?= $fecha_entrega;?></span></td>
                              <?php }
                            }
                    }else{
                             echo "<td colspan='4' align='left'><div class=''><span style='font-size: 1em;color:red'>No se ha asignado Transporte</span></div></td>";
                                 }             
                    ?>
                  </tr>
                 
                 <?php endforeach; }else{echo "<td colspan='4' align='center'><div class=''><span style='font-size: 1em;color:red'>No Hay datos q mostrar </span></div></td>";}?>
              </table>
            </div>
            <!-- /.box-body -->
        </div>
          <!-- /.box -->
      </div>
     
      
        <!-- /.col -->
        <div class="col-xs-12">
          <div id="output_grocery" class="col-xs-12 box-body">
            <?php  // echo $output; ?>
          </div>
        </div>

        </div>
      
      <!-- /.row -->
    </section>
    <!-- /.content -->
    
  </div>


<!-- formulario agregar costos aereos -->
  <div id="agregar_fechapagoFat" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header box box-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class='row'>
          <div class='col-md-4'>
          
          </div>
          <div class='col-md-8'>
           <h4 class="modal-title" id="aereo">Pago de Factura</h4>
          </div>
        </div>
        
      </div>
      <div class="modal-body">
       
          <form id="agregar_fechapagoFat_form" action="" method="post" class="form-horizontal">
            <div class="form-group">
              <?php 
                 $data = array('id_paquete'=>'');
                 echo form_hidden($data);

              ?>
              <label for="fecha_pago_fact" class="label-control col-md-4">Fecha de Pago de Factura</label>
              <div class="col-md-8">
               <?php
               $data = array(
                  'type'  => 'date',
                  'name'  => 'fecha_pago_fact',
                  'id'    => 'fecha_pago_fact',
                  'value' => '',
                  'class' => 'form-control'
                    );
                echo form_input($data);
               ?> 
             </div>
            </div>
            

          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" id="btnSave_factura" class="btn btn-primary">Guardar cambios</button>
      </div>
    </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /.modal -->



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">

      <b>Version</b> 2.3.7
    </div>
    
    <strong>Copyright &copy; 2017-2018 <a href="http://www.sistema.keysolutions.com.bo" target="_blank">Key Solutions S.R.L</a>.</strong> All rights 
    reserved.  
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>plantillas/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>plantillas/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url();?>plantillas/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>plantillas/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>plantillas/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>plantillas/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>plantillas/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>plantillas/dist/js/demo.js"></script>
<!-- page script -->

<script>
    

  $(document).ready(function(){

     
    $("#faturasxpagar").DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_registros por página",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando la página_PAGE_ of _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ Total de registros)"
          }
         

      });
    $("#example1").DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_registros por página",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando la página_PAGE_ of _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ Total de registros)"
          }
         

      });
    $("#tabla_transito").DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_registros por página",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando la página_PAGE_ of _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ Total de registros)"
          }
         

      });

    

        $("select[name=id_producto]").change(function(){
            //alert($('select[name=id_producto]').val());
           var id_producto = $('select[name=id_producto]').val();
           // $('input[name=costo]').val($(this).val());
            
            $.ajax({
              type: 'ajax',
              method: 'get',
              url: '<?php echo base_url() ?>comprador/datosproducto',
              data: {id_producto: id_producto},
              async: false,
              dataType: 'json',
              success: function(data){
                              
                 $('#descripcion').html(" Precio unitario: <strong>( "+data.precio_unitario+" USD )<strong> ");
                 $('#descripcion').addClass('label label-success');
                
                 $("input[name=cantidad_solicitada]").change(function(){
                   var precio_unitario = parseFloat(data.precio_unitario);
                   var cantidad_solicitada = parseFloat($('input:text[name=cantidad_solicitada]').val());
                   var resultado = parseFloat(precio_unitario*cantidad_solicitada).toFixed(2);
                   $('input[name=costo_total]').val(resultado);
                  });
 
              },
             error: function(){
                 alert('No hay datos q mostrar');
              }
            });

            });

      
  });//--------fin de funcion onready

        function mostrar_reporte()
          {
            $('#output_grocery').addClass('hidden');
            $('#reporte_previa').show(); 
            $('#vista_previa').hide();


          }
        
         function mostrar_vistaprevia()
          {
            $('#output_grocery').addClass('hidden');
            $('#vista_previa').show();           
          }


    

    function div_pedido(id_pedido_prov)
     {
      $('#myModal').modal('show');
      $('#myForm').attr('action','<?php echo base_url() ?>comprador/updatePedido_prove');
      $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>comprador/editpedido_prove',
        data: {id_pedido_prov: id_pedido_prov},
        async: false,
        dataType: 'json',
        success: function(data){

          $('h4.modal-title').text('Dividir Pedido: ' +data.no_pedido);
          $('input[name=cantidad_solicitada]').val(parseInt(data.cantidad_solicitada));
          $('input[name=id_pedido_prov]').val(data.id_pedido_prov);
          $('input[name=no_pedido]').val(data.no_pedido);
          $('input[name=fecha_pedido]').val(data.fecha_pedido);
          $('input[name=fecha_entrega]').val(data.fecha_entrega);
          $('input[name=id_proveedor]').val(data.id_proveedor);
          $('input[name=id_producto]').val(data.id_producto);
          $('input[name=nombre_producto]').val(data.nombre_producto);
          $('input[name=costo_total]').val(data.costo_total);
          $('input[name=id_almacen]').val(data.id_almacen);
          
          $('input[name=cantidad_solicitada]').on('keyup', function(){
            var cantidad_restar = $(this).val();
            var cantidad_solicitada = parseInt(data.cantidad_solicitada);
            var resultado = parseInt(cantidad_solicitada - cantidad_restar);
            $('input[name=cantidad_solicitada_resto]').val(resultado);
           });
        
        },
        error: function(){
          alert('No se ha podido editar');
        }
      });

    }

   $('#btnSave').click(function(){
      var url = $('#myForm').attr('action');
      var data = $('#myForm').serialize();
      //validate form
      var cantidad_solicitada = $('input[name=cantidad_solicitada]');
      var result = '';
      if(cantidad_solicitada.val()==''){
        cantidad_solicitada.parent().parent().addClass('has-error');
      }else{
        cantidad_solicitada.parent().parent().removeClass('has-error');
        result +='1';
      }

      if(result=='1'){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#myModal').modal('hide');
              $('#myForm')[0].reset();
              if(response.type=='update'){
                var type ="actualizado"
              }
              $('#list-report-success').html('<p>Pedido '+type+'</p>').fadeIn().delay(5000).fadeOut('slow');
               location.reload();
              
            }else{
              alert('No se puede actualizar');
            }
          },
          error: function(){
          }
        
        });
      }
    });

    //-------funcion insertar en la costos terrestres


    //---------funcion editar costos aereos------- 
    function editar_costos_aereos(id_paquete)
     {
       $('#costo_transporte_aereoModal').modal('show');
       $('#costo_transporte_aereo_form').attr('action','<?php echo base_url()?>comprador/updatecosto_aereo');
       $('input[name=id_paquete]').val(id_paquete);
       $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>comprador/editcosto_aereo',
        data: {id_paquete: id_paquete},
        async: false,
        dataType: 'json',
        success: function(data){
          $('input[name=costo_aereo]').val(data.costo_aereo);
          $('input[name=id_paquete]').val(data.id_paquete);
          },
        error: function(){
          alert('No se ha podido editar');
        }
      });

    }
    //------------------editar costos terrestres------
      function editar_costos_terrestres(id_paquete)
     {
       $('#costo_transporteModal').modal('show');
       $('.modal-transporte').css('height','auto','width','100%');
       $('.modal-transporte').css('margin', '100px auto 100px auto');
       $('#costo_transporte_form').attr('action','<?php echo base_url() ?>comprador/updatecosto_terrestre');
       $('input[name=id_paquete]').val(id_paquete);
       $.ajax({
        type: 'ajax',
        method: 'get',
        url: '<?php echo base_url() ?>comprador/editcosto_aereo',
        data: {id_paquete: id_paquete},
        async: false,
        dataType: 'json',
        success: function(data){
          
          $('input[name=id_paquete]').val(data.id_paquete);
          $('input[name=costo_transp_ext]').val(data.costo_transp_ext);
          $('input[name=costo_aduana_ext]').val(data.costo_aduana_ext);      
          $('input[name=costo_aduana_bol]').val(data.costo_aduana_bol);
          $('input[name=costo_transporte_bol]').val(data.costo_transporte_bol);
          $('input[name=costo_trans_bol_int]').val(data.costo_trans_bol_int);
          
          $('input[name=fecha_key').val(data.fecha_key);
          $('input[name=no_manipuleo').val(data.no_manipuleo);
          $('input[name=respaldo_flete').val(data.respaldo_flete);
          $('input[name=no_poliza').val(data.no_poliza);
          $('input[name=gravamen_aduana').val(data.gravamen_aduana);
          $('input[name=iva').val(data.iva);
          $('input[name=sidunea').val(data.sidunea);
          $('input[name=albo').val(data.albo);
          $('input[name=camara_comercio').val(data.camara_comercio);
          $('input[name=estibaje').val(data.estibaje);
          $('input[name=gasto_operacion').val(data.gasto_operacion);
          $('input[name=comicion_agencia').val(data.comicion_agencia);

          
          },
          error: function(){
            alert('No se ha podido editar');
          }
       });

     }

    //-------------------------------------------   


    //--------area a imprimir-------------

    function printDiv(nombreDiv) {

     $('#example1_filter').addClass('hidden');

     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;

     window.print();

     document.body.innerHTML = contenidoOriginal;
}




      /****Gastos con facturas  *******/
     $('#fat_pag').on('click',function(){
        
        var inset=[];
        
         $('.micheckbox').each(function(){
           if($(this).is(':checked'))
           {
            $('#agregar_fechapagoFat').modal('show');
            $('#agregar_fechapagoFat_form').attr('action','<?php echo base_url() ?>gerencia/update_fact');
             //inset.push($(this).val());
              var id_paquete =$(this).val();
              $('input[name=id_paquete]').val(id_paquete);
           }
         });
        // insert=insert.toString();
        
     });

  function agregar_costos(id_paquete)
     {
      $('#agregar_fechapagoFat').modal('show');
      $('#agregar_fechapagoFat_form').attr('action','<?php echo base_url() ?>gerencia/update_fact');
      $('input[name=id_paquete]').val(id_paquete);
     }
  
  $('#btnSave_factura').click(function(){
      var url = $('#agregar_fechapagoFat_form').attr('action');
      var data = $('#agregar_fechapagoFat_form').serialize();
      //validate form
      var id_paquete   = $('input[name=id_paquete]');
      var fecha_pago_fact  = $('input[name=fecha_pago_fact]');
      var result = '';
      if(fecha_pago_fact.val()==''){
        fecha_pago_fact.parent().parent().addClass('has-error');
      }else{
        fecha_pago_fact.parent().parent().removeClass('has-error');
        result +='1';
      }
      if(result=='1'){
        $.ajax({
          type: 'ajax',
          method: 'post',
          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#agregar_fechapagoFat').modal('hide');
              $('#agregar_fechapagoFat_form')[0].reset();
              if(response.type=='add'){
                var type = 'agregados'
              }
              if(response.type=='update'){
                var type = 'actualizada'
              }
              $('#list-report-success').html('<p> Fecha  '+type+'  exitosamente </p>').fadeIn().delay(4000).fadeOut('slow');
              location.reload();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('No se han podido agregar datos');
          }
        });
      }
    });
     


      //-------------------------------------------------
      $('input[name=costo_trans_bol_int_check]').on('click', function(){
       if($(this).is(':checked')){
       var valor=parseFloat($('input:text[name=costo_trans_bol_int]').val());
       var credito_fiscal =parseFloat((valor * 13)/100);

          // Hacer algo si el checkbox ha sido seleccionado
            alert("Valor de crédito fiscal: " +credito_fiscal);
        }
       $('input[name=costo_trans_bol_int_check]').val(credito_fiscal);
     });

    



 
   $('#btnSave_aereo').click(function(){
      var url = $('#costo_transporte_aereo_form').attr('action');
      var data = $('#costo_transporte_aereo_form').serialize();
      //validate form
      var id_paquete   = $('input[name=id_paquete]');
      var costo_aereo  = $('input[name=costo_aereo]');
      var result = '';
      if(costo_aereo.val()==''){
        costo_aereo.parent().parent().addClass('has-error');
      }else{
        costo_aereo.parent().parent().removeClass('has-error');
        result +='1';
      }
      if(result=='1'){
        $.ajax({
          type: 'ajax',
          method: 'post',

          url: url,
          data: data,
          async: false,
          dataType: 'json',
          success: function(response){
            if(response.success){
              $('#costo_transporte_aereoModal').modal('hide');
              $('#costo_transporte_aereo_form')[0].reset();
              if(response.type=='add'){
                var type = 'agregados'
              }
              if(response.type=='update'){
                var type = 'actualizado'
              }
              $('#list-report-success').html('<p> Costos  '+type+'  exitosamente </p>').fadeIn().delay(4000).fadeOut('slow');
              //showAllEmployee();
            }else{
              alert('Error');
            }
          },
          error: function(){
            alert('No se han podido agregar datos');
          }
        });
      }
    });
 
</script>
</body>
</html>