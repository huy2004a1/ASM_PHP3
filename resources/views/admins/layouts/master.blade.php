<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('admins.layouts.partials.css')

</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        @include('admins.layouts.partials.aside')

    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">

                @include('admins.layouts.partials.header-top-left')

            </div>
            <div class="top-right">
                <div class="header-menu">

                    @include('admins.layouts.partials.header-top-right')

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
           @yield('content');
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">

            @include('admins.layouts.partials.footer')

        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    @include('admins.layouts.partials.js')

</body>

</html>