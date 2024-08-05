<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('tieudetrang')</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
        <style>
            header { height: 220px}
            nav { height: 60px}
            footer { height: 90px}
            main { display: flex; min-height: 500px}
        </style>
</head>
<body>
    <div class="container">
    <headerclass="bg-primary"></header>
    <nav class="bg-primary">
        @include('menu')
    </nav>
    <main>
        <article class="col-9 bg- light">
            @yield('noidung')
        </article>
        <aside class="col-3 bg-info">
            THÔNG TIN BỔ SUNG
        </aside>
    </main>
    <footer class="bg-dark">PHÁT TRIỂN BỞI XYZ</footer>
    </div>
</body>
</html>