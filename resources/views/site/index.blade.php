<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href={{asset("preview/favicon.ico")}} />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="description" content="Web site created using create-react-app" />
    <link rel="apple-touch-icon" href={{asset("template-public/logo192.png")}} />
    <link rel="manifest" href="{{ asset('template-public/manifest.json') }}" {{-- href="/demo/purple-react-free/template/demo_1/preview/manifest.json" --}} />
    <title>Purple React Admin - Demo1</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.16/tinymce.min.js"
        integrity="sha256-DwA/5XvQk7JerRG73GsRcEUM+ESubaliT2xRpDtIKNA=" crossorigin="anonymous"></script>
    <link href={{asset("preview/static/css/4.687196e3.chunk.css")}} rel="stylesheet">
    <link href={{asset("preview/static/css/main.d227dcc7.chunk.css")}} rel="stylesheet">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container-scroller">
        @include('layouts.navbar')
        <div class="container-fluid page-body-wrapper">
            @include('layouts.sidebar')
            {{-- { sidebarComponent } --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                    {{-- { SettingsPanelComponent } --}}
                </div>
                {{-- { footerComponent } --}}
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>