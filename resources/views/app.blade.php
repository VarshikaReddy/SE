<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta charset="utf-8" />
    <meta name="author" content="Softnio" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers." />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-91615293-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "UA-91615293-4");
    </script>
</head>
<body class="nk-body bg-lighter npc-general has-sidebar">
<div class="nk-app-root">
    <div class="nk-main">
        @include('admin.layouts.sidebar')
        <div class="nk-wrap">
            @include('admin.layouts.navbar')
            <div class="nk-content">
                @yield('content')
            </div>
            @include('admin.components.alert-modal')
            @include('admin.layouts.footer')
        </div>
    </div>
</div>
<script src="{{ asset('assets/js/bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="{{ asset('assets/js/charts/chart-lms.js') }}"></script>
</body>
</html>
