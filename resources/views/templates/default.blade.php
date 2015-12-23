<!--Hier wird die allgemeine View generiert mit Blade. Zunächst wird partials.header geladen, dann der Content der jeweiligen View, dann partials.footer-->
@include('templates.partials.header')
@yield('content')
@if($errors->any())
<ul class="alert alert-danger">
    @foreach( $errors->all() as $error)
    <li> {{error}} </li>
    @endforeach
</ul>
@endIF
@include('templates.partials.footer')