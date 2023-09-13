@include('admin.admin_Header')
    <body class="sb-nav-fixed">
        @include('admin.admin_Topnav')
        <div id="layoutSidenav">

            @include('admin.admin_Sidenav')

            @yield('content')
        </div>
       @include('admin.admin_Script')
    </body>
</html>
