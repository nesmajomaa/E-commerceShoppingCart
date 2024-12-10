<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('dashboard_assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets/images/favicon.png') }}" />
  </head>

  <body class="with-welcome-text">
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="#">
              <img src="{{asset('dashboard_assets/images/logo.svg')}}" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="#">
              <img src="{{asset('dashboard_assets/images/logo-mini.svg')}}" alt="logo" />
            </a>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">{{ Auth::guard('admin')->user()->name }}</span></h1>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-user-circle"></i></button>
                
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <p class="mb-1 mt-3 fw-semibold">{{ Auth::guard('admin')->user()->name }}</p>
                  <p class="fw-light text-muted mb-0">{{ Auth::guard('admin')->user()->email }}</p>
                </div>                
                <a class="dropdown-item" href="{{ URL::to('/admin/logout')}}"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          
        </div>
      </nav>
      <!-- partial/partials/_sidebar.html -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">

            {{-- Dashboard --}}
            <li class="nav-item">
              <a class="nav-link" href="{{ URL::to('/dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            {{-- Forms --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Forms</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="{{ URL::to('/dashboard/addCollection')}}">Add Collection</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ URL::to('/dashboard/addProduct')}}">Add Product</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{ URL::to('/dashboard/addAdmin')}}">Add Admin</a></li>
                </ul>
              </div>
            </li>

            {{-- Tables --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/dashboard/collections')}}">Collections</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/dashboard/products')}}">Products</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/dashboard/orders')}}">Orders</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{ URL::to('/dashboard/users')}}">Users</a></li>
                </ul>
              </div>
            </li>

          </ul>
        </nav>