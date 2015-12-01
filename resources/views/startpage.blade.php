<!-- Startseite. Hier werden die Trips von content.trip angezeigt.-->
<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')

<!--container-->
<div class="container">
    <div style="display: flex" class="row">

        @include ('templates.content.trip', ['tripName' => 'Wien', 'pics' => ['Wien1', 'Wien2'], 'RID' => '1', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '500$', 'booking' => 'jetzt Name buchen'])
        @include ('templates.content.trip', ['tripName' => 'Basel', 'pics' => ['Basel1', 'Basel2'], 'RID' => '2', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '700$', 'booking' => 'jetzt Name buchen'])
    </div>
    <div style="display: flex" class="row">
        @include ('templates.content.trip', ['tripName' => 'Rom', 'pics' => ['Rom1', 'Rom2'], 'RID' => '3', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '800$', 'booking' => 'jetzt Name buchen'])
        @include ('templates.content.trip', ['tripName' => 'Wien', 'pics' => ['Wien1', 'Wien2'], 'RID' => '4', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '500$', 'booking' => 'jetzt Name buchen'])
    </div>
    <div style="display: flex" class="row">
        @include ('templates.content.trip', ['tripName' => 'Basel', 'pics' => ['Basel1', 'Basel2'], 'RID' => '5', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '700$', 'booking' => 'jetzt Name buchen'])
        @include ('templates.content.trip', ['tripName' => 'Rom', 'pics' => ['Rom1', 'Rom2'], 'RID' => '6', 'describtion' => 'Text Name', 'data' => 'Daten Name', 'price' => '800$', 'booking' => 'jetzt Name buchen'])
    </div>

</div>
@stop
