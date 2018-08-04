<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Codeigniter Boostrap 4 - Master</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <!-- Bootstrap Datetimepicker CSS-->
  <link href="<?php echo base_url()?>assets/bootstrap-datetimepicker/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>">CodeigniterXbootstrap4 - Master</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url()?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item <?php if(isset($link_datepicker)){ echo $link_datepicker;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>Datepicker">
            <i class="fa fa-fw fa-calendar"></i>
            <span class="nav-link-text">Datepicker</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Datatables</span>
          </a>
          <ul class="sidenav-second-level collapse <?php if(isset($link_group_datatable)){ echo $link_group_datatable;}?>" id="collapseComponents">
            <li class="<?php if(isset($link_datatable_serverside)){ echo $link_datatable_serverside;}?>">
              <a href="<?php echo base_url()?>datatable_serverside">Server Side</a>
            </li>
            <li class="<?php if(isset($link_datatable_standar)){ echo $link_datatable_standar;}?>">
              <a href="<?php echo base_url()?>datatable_standar">Standar</a>
            </li>
          </ul>
        </li>
        <li class="nav-item <?php if(isset($link_export)){ echo $link_export;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>export">
            <i class="fa fa-file-excel-o"></i>
            <span class="nav-link-text"> Export</span>
          </a>
        </li>
        <li class="nav-item <?php if(isset($link_download)){ echo $link_download;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>download">
            <i class="fa fa-download"></i>
            <span class="nav-link-text"> Download</span>
          </a>
        </li>
        <li class="nav-item <?php if(isset($link_chart)){ echo $link_chart;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>chart">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text"> Chart</span>
          </a>
        </li>
        <li class="nav-item <?php if(isset($link_user)){ echo $link_user;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>user_management">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text"> Ajax CRUD</span>
          </a>
        </li>
        <li class="nav-item <?php if(isset($link_crud_modal)){ echo $link_crud_modal;}?>" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php echo base_url()?>crud_modal">
            <i class="fa fa-bar-chart"></i>
            <span class="nav-link-text">Ajax CRUD+Modal</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>