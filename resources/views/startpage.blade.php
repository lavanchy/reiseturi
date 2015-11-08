<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')
<!--------------------------------------------- Start Template-------------------------------------------------------------------->
<!--container-->

<div class="container">
@include ('templates.content.trip', ['tripName' => 'EuroTrip', 'pics' => ['Wien1', 'Wien2'], 'RID' => '1'])
@include ('templates.content.trip', ['tripName' => 'EuroTrip', 'pics' => ['Wien1', 'Wien2'], 'RID' => '2'])
@include ('templates.content.trip', ['tripName' => 'EuroTrip', 'pics' => ['Wien1', 'Wien2'], 'RID' => '3'])


</div>
    @stop
