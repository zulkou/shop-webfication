<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Layout &rsaquo; Top Navigation &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.html" class="navbar-brand sidebar-gone-hide">Toserline</a>
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        <div class="nav-collapse">
          <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
          </a>
          <ul class="navbar-nav">
          </ul>
        </div>
        <form class="form-inline ml-auto">
          {{-- <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div> --}}
        </form>
        <ul class="navbar-nav navbar-right">
          </li>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">

            {{-- <div class="d-sm-none d-lg-inline-block">Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a  href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout --}}
              </a>
            </li>
        @if (Auth::check())
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </div>
            </li>
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Log in
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            </li>
        @endif
    </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="{{ route('template') }}" class="nav-link"><i></i><span>Dashboard</span></a>
              </li>
            <li class="nav-item active">
                <a href="{{ route('barangs') }}" class="nav-link"><i></i><span>Barang</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('pemesan') }}" class="nav-link"><i></i><span>Pemesan</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="/membership" class="nav-link"><i></i><span>Membership</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Posts</h1>
            <div class="section-header-button">
              <a href="features-post-create.html" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card mb-0">
                  <div class="card-body">
                    <ul class="nav nav-pills">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Draft <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pending <span class="badge badge-primary">1</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="text-center pt-2">
                            <div class="custom-checkbox custom-checkbox-table custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>Created At</th>
                          <th>Status</th>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                              <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Laravel 5 Tutorial: Introduction
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-primary">Published</div></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                              <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Laravel 5 Tutorial: Installing
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-primary">Published</div></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                              <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Laravel 5 Tutorial: MVC
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-primary">Published</div></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                              <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Laravel 5 Tutorial: CRUD
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-danger">Draft</div></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Laravel 5 Tutorial: Deployment
                            <div class="table-links">
                              <a href="#">View</a>
                              <div class="bullet"></div>
                              <a href="#">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="text-danger">Trash</a>
                            </div>
                          </td>
                          <td>
                            <a href="#">Web Developer</a>,
                            <a href="#">Tutorial</a>
                          </td>
                          <td>
                            <a href="#">
                              <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="title" title=""> <div class="d-inline-block ml-1">Rizal Fakhri</div>
                            </a>
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-warning">Pending</div></td>
                        </tr>
                      </table>
                    </div>
                    <div class="float-right">
                      <nav>
                        <ul class="pagination">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">2</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#">3</a>
                          </li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

    <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>
