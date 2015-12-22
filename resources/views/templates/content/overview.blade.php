
<tr class="info"><!--TODO anpassen an anzahl besucher-->
    <td>{{$trip->id}}</td>
    <td>{{$trip->destination}}</td>
    <td>{{$trip->depart}}</td> <!--TODO, update database with Depart-->
    <td>{{$trip->startDate}}</td>
    <td>{{$trip->endDate}}</td>
    <td>{{$passengers}}</td>
    <td><a href="{{url('admin/editTrip/'.$trip->id)}}"class="btn btn-default">Bearbeiten</a></td>
</tr>