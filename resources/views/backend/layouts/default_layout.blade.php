<!DOCTYPE html>
<html>

<head>
    @include('backend.includes.head_style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('backend.includes.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backend.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  @include('backend.includes.footer')

  {{-- <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar --> --}}

</div>
<!-- ./wrapper -->

@include('backend.includes.foot_script')
</body>
</html>
