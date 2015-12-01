<!--Hier wird die allgemeine View generiert mit Blade. Zunächst wird partials.header geladen, dann der Content der jeweiligen View, dann partials.footer-->
@include('templates.partials.header')
@yield('content')
@include('templates.partials.footer')