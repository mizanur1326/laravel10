@include('backend.layouts.headerLink')

<body>

@include('backend.layouts.header')

@include('backend.layouts.sidebar')

@yield('content');

@include('backend.layouts.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('backend.layouts.footerLink')

</body>

</html>