<!DOCTYPE html>
<html>

<head>
    @include('backend.includes.head_style')
</head>
<body class="hold-transition login-page">



    @yield('content')
    


 
  {{-- @include('backend.includes.footer') --}}

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
