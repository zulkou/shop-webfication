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
                    Masuk
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
            <li class="nav-item dropdown">
                <a href="{{ route('barangs') }}" class="nav-link"><i></i><span>Barang</span></a>
            </li>
            <li class="nav-item dropdown">
                <a href="{{ route('pemesan') }}" class="nav-link"><i></i><span>Pemesan</span></a>
            </li>
            <li class="nav-item active">
                <a href="{{ route('membership') }}" class="nav-link"><i></i><span>Membership</span></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Profile</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Hi, Ujang!</h2>
            <p class="section-lead">
              Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-5">
                <div class="card profile-widget">
                  <div class="profile-widget-header">
                    <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Posts</div>
                        <div class="profile-widget-item-value">187</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Followers</div>
                        <div class="profile-widget-item-value">6,8K</div>
                      </div>
                      <div class="profile-widget-item">
                        <div class="profile-widget-item-label">Following</div>
                        <div class="profile-widget-item-value">2,1K</div>
                      </div>
                    </div>
                  </div>
                  <div class="profile-widget-description">
                    <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> Web Developer</div></div>
                    Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
                  </div>
                  <div class="card-footer text-center">
                    <div class="font-weight-bold mb-2">Follow Ujang On</div>
                    <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-github mr-1">
                      <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="btn btn-social-icon btn-instagram">
                      <i class="fab fa-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-7">
                <div class="card">
                  <form method="post" class="needs-validation" novalidate="">
                    <div class="card-header">
                      <h4>Edit Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group col-md-6 col-12">
                            <label>First Name</label>
                            <input type="text" class="form-control" value="Ujang" required="">
                            <div class="invalid-feedback">
                              Please fill in the first name
                            </div>
                          </div>
                          <div class="form-group col-md-6 col-12">
                            <label>Last Name</label>
                            <input type="text" class="form-control" value="Maman" required="">
                            <div class="invalid-feedback">
                              Please fill in the last name
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-7 col-12">
                            <label>Email</label>
                            <input type="email" class="form-control" value="ujang@maman.com" required="">
                            <div class="invalid-feedback">
                              Please fill in the email
                            </div>
                          </div>
                          <div class="form-group col-md-5 col-12">
                            <label>Phone</label>
                            <input type="tel" class="form-control" value="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12">
                            <label>Bio</label>
                            <textarea class="form-control summernote-simple">Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.</textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group mb-0 col-12">
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                              <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                              <div class="text-muted form-text">
                                You will get new information about products, offers and promotions
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
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
