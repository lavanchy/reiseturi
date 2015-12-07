<!-- Startseite. Hier werden die Trips von content.trip angezeigt.-->
<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')

<!--container-->
<div class="container">
@foreach ($trips as $trip)
<!--TODO Bilder mit online-link versehen und online stellen-->
@include ('templates.content.trip', ['trip'=>$trip, 'pics' => ['Wien1', 'Wien2']])
@endforeach
</div>
@stop
