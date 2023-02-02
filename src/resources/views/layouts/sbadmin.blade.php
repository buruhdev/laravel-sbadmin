<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <x-sbadmin.meta-tags-component />
    <title>@yield('title')</title>
    <link href="{{ asset('sbadmin') }}/css/styles.css" rel="stylesheet" />
    <script src="{{ asset('sbadmin') }}/js/fontawesome.v6.js"></script>
</head>
<body class="sb-nav-fixed">

    <x-sbadmin.top-menu-component />

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <x-sbadmin.left-menu-component />
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    
                    <x-sbadmin.flash-message-component />
                    
                    @yield('main')

                </div>
            </main>
            <x-sbadmin.footer-component />
        </div>
    </div>
    <script src="{{ asset('sbadmin') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('sbadmin') }}/js/scripts.js"></script>
</body>
</html>
