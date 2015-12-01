<!--Dies ist die Admin Übersicht aller Reisen. Sie wird nur dem Admin angezeigt. Hier werden alle Reisen in einer Tabelle angezeigt, 
der Admin kann sie öffnen und eine neue Reise erstellen. Die effektive Bearbeitung findet bei AdminTripEdit statt.-->
<!-- Header/Footer -->
@extends ('templates.default')
<!--Die Tabellen werden mit assoc erstellt
    @param RID-->
@section ('content')
<div class="container">
    <h2>Admin Übersicht</h2>
    <p>Die Tabellen werden dynamisch erstellt mit assoc. Die Farben könne verwendet werden, um den Status anzuzeigen, CSS-Technisch kein Problem.</p>
    <table class="table">
        <thead>
            <tr>
                <th>Reisenummer</th>
                <th>Destination</th>
                <th>Abfahrtsort</th>
                <th>Hotel</th>
                <th>Hinfahrt</th>
                <th>Rückfahrt</th>
                <th>Buchungen</th>

                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="info">
                <td>0001</td>
                <td>Wien</td>
                <td>Zürich</td>
                <td>Bellvue</td>
                <td>23.12.15</td>
                <td>24.12.15</td>
                <td>10</td>
                <td><button type="button" class="btn btn-default">Bearbeiten</button></td>
            </tr>
            <tr class="success">
                <td>0002</td>
                <td>Rom</td>
                <td>Basel</td>
                <td>Bella Italia</td>
                <td>26.12.15</td>
                <td>29.12.15</td>
                <td>18</td>
                <td><button type="button" class="btn btn-default">Bearbeiten</button></td>
            </tr>
            <tr class="danger">
                <td>0003</td>
                <td>Basel</td>
                <td>Zürich</td>
                <td>Drei König</td>
                <td>31.12.15</td>
                <td>01.01.16</td>
                <td>2</td>
                <td><button type="button" class="btn btn-default">Bearbeiten</button></td>
            </tr>
<!--Diese Tabelle zeigt nur an, dass eine neue Reise erstellt werden soll.-->
            <tr class="default">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-default">Neue Reise</button></td>
            </tr>
        </tbody>
    </table>
</div>
@stop