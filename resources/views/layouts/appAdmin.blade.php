<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assetslte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assetslte/dist/css/adminlte.min.css')}}">
  <link href='{{asset('assetslte/dki-jakarta-logo.png')}}' rel='shortcut icon'>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="assetslte/index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Belajar Laravel 8</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assetslte/foto1.1.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Aslan Asilon</a>
        </div>

      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Produk
                </p>
                </a>
               </li>

               <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Contoh Dashboard
                <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="../../index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard </p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="../../index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="../../index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{route('produk.index')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Produk
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_booking.html" class="nav-link">
                <i class="nav-icon fas fa-hospital"></i>
                <p>
                    Manajemen Booking
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin_user.html" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Manajemen User
                </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                Contoh Add to Cart
                <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add to Cart 1 </p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="../../index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="../../index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                    </li>
                </ul>
            </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-smile"></i>
              <p>
                Contoh CRUD
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('produkcontoh.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD Contoh</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('catatan-hutang.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catatan-hutang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('companies.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD 1 - Companies</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('perusahaans.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD 2 Perusahaan- Yajra Datatables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('useryajra.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD 3 UserYajra - Yajra Datatables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/students" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD 4 Student - Upload Image</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/products" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CRUD 5 product - image upload</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1>@yield('title')</h1> 
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">

        @yield('content')

        </div>
              
    </section>





</div>
    <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2021 .</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- CHartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- jQuery -->
<script src="{{asset('assetslte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assetslte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assetslte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assetslte/dist/js/demo.js')}}"></script>


<!-- ==========CONTOH USER YAJRA=============== -->
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#usersTable').DataTable({
                // processing: true,
                serverSide: true,
                ajax: "{{ url('http://localhost:8000/useryajra') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                   // {data: 'email_verification', name: 'email_verification'},
                   //  {data: 'is_admin', name: 'is_admin'},
                    {data: 'photo_profile', name: 'photo_profile'}
                ]
            });
        });
      </script>
</body>
</html>
