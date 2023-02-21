<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('adminstrap/examples/img/v.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('adminstrap/examples/img/v.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    CRUD | VERGOM
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('adminstrap/examples/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('adminstrap/examples/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('adminstrap/examples/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{ asset('adminstrap/examples/img/logo-small.png') }}">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="#" class="simple-text logo-normal">
          ADMIN
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="/">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/userinfo/create">
              <i class="nc-icon nc-single-02"></i>
              <p>Add User</p>
            </a>
          </li>
          <li>
            <a href="/userinfo/manage">
              <i class="nc-icon nc-tile-56"></i>
              <p>Manage Users</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
             
            </div>
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
      
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
        
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
           
           
            <ul class="navbar-nav">
              @auth
                
              <form action="/admin/logout" method="POST">
                @csrf
              <li class="nav-item">
                <button style="border: none" class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-minimal-right"></i>Logout
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p></button>
                
              </li>
              </form>
              @else
              
            
              <li class="nav-item">
                <a href="/admin/login" style="border: none" class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-circle-10"></i>Login
                 </a>
                
              </li>
              <li class="nav-item">
                <a href="/admin/register" style="border: none" class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-badge"></i>REGISTER
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p></a>
                
              </li>
              
            
              @endauth
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- End Navbar -->