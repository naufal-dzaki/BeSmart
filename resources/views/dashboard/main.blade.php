<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Admin</title>
=======
    <title>Besmart | Admin</title>
>>>>>>> d04b229c4869fbce02f3f36256b78ec1914abf6e
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    {{-- feather icons --}}
    <script src="{{ asset('https://unpkg.com/feather-icons') }}"></script>
    <link id="pagestyle" href="{{ asset('css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />

    {{-- tailwind --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- daisyui --}}
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.1.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

        {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }

        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100 font-family-karla flex min-h-screen">

    {{-- sidebar --}}
    @include('dashboard.partials.sidebar')

    <div class="w-full flex flex-col h-screen overflow-y-hidden">
        {{-- navbar --}}
        @include('dashboard.partials.navbar')

        <div class="w-full overflow-x-hidden border-t flex flex-col">
            <main class="w-full flex-grow p-4">
                <!-- content -->
                @yield('DashboardContent')

            </main>

            {{-- footer --}}
            @include('dashboard.partials.footer')
        </div>

    </div>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <!-- ChartJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

    {{-- feather icons --}}
    <script>
        feather.replace()
    </script>
</body>
</html>
