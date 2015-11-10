<!-- Header/Footer -->
@extends ('templates.default')
<!--content -->
@section ('content')
<div class="container">
    <h2>Contextual Classes</h2>
    <p>Contextual classes can be used to color table rows or table cells. The classes that can be used are: .active, .success, .info, .warning, and .danger.</p>            
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
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="success">
                <td>0001</td>
                <td>Wien</td>
                <td>Zürich</td>
                <td>Bellvue</td>
                <td>23.12.15</td>
            </tr>
            <tr class="danger">
                <td>Mary</td>
                <td>Moe</td>
                <td>mary@example.com</td>
            </tr>
            <tr class="info">
                <td>July</td>
                <td>Dooley</td>
                <td>july@example.com</td>
            </tr>
        </tbody>
    </table>
</div>
@stop