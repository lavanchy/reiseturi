<!--Dies ist die Admin Übersicht aller Reisen. Sie wird nur dem Admin angezeigt. Hier werden alle Reisen in einer Tabelle angezeigt, 
der Admin kann sie öffnen und eine neue Reise erstellen. Die effektive Bearbeitung findet bei AdminTripEdit statt.-->
<!-- Header/Footer -->
@extends ('templates.default')
<!--Die Tabellen werden mit assoc erstellt
    @param RID-->
@section ('content')
<div class="container">
    <h2>Admin Übersicht</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Reisenummer</th>
                <th>Destination</th>
                <th>Abfahrtsort</th>
                <th>Hinfahrt</th>
                <th>Rückfahrt</th>
                <th>Buchungen</th>
                <th></th>
            </tr>
        </thead>
        <tbody>



            @foreach ($trips as $trip)
            <tr><!--TODO anpassen an anzahl besucher-->
                <td>{{$trip->id}}</td>
                <td>{{$trip->destination}}</td>
                <td>{{$trip->depart}}</td> <!--TODO, update database with Depart-->
                <td>{{$trip->startDate}}</td>
                <td>{{$trip->endDate}}</td>
                <td><a href="{{url('admin/editTrip/'.$trip->id)}}"class="btn btn-default">Bearbeiten</a></td>
            </tr>
            @endforeach
            <!--Diese Tabelle zeigt nur an, dass eine neue Reise erstellt werden soll.-->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><a href="{{url('admin/newTrip')}}" class="btn btn-default">Neue Reise</a></td>
            </tr>
        </tbody>
    </table>
</div>
@stop