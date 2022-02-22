<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../assets/img/bsmart.png">
  <title>
    Dashboard
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">

  <!-- sidebar -->
    @include('dashboard.partials.sidebar')

  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
      @include('dashboard.partials.navbar')

    <!-- content -->

  </main>


  <!-- javascript -->
  <script src="{{ asset('js/core/popper.min.js') }}"></script>
  <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
</body>

</html>
