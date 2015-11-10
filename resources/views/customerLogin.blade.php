<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')

<div class="container col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Persönliche Daten</div>
        <div class="panel-body">


            <p>Die Daten sollen idealerweise mit assoc aus den Datenbanken entstehen</p>            
            <table class="table">
                <tbody>
                    <tr>
                        <td>Vorname</td>
                        <td>John</td>
                    </tr>
                    <tr>
                        <td>Nachname</td>
                        <td>Hofer</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-default">Bearbeiten</button>

        </div>
    </div>
</div>
<div class="container col-md-8">
    <div class="panel panel-default"> 
        <div class="panel-heading">Buchungen</div>
        <div class="panel-body">


            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#buchung1">Buchung 1</a></li>
                <li><a data-toggle="tab" href="#buchung2">Buchung 2</a></li>
                <li><a data-toggle="tab" href="#buchung3">Buchung 3</a></li>
            </ul>

            <div class="tab-content">
                <div id="buchung1" class="tab-pane fade in active">
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Zahlungsmethoden</div>
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Zahlungsmethode</td>
                                        <td>Visa</td>
                                    </tr>
                                    <tr>
                                        <td>Kartennummer</td>
                                        <td>**** 3333</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Reisedetails</div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Reiseziel</td>
                                    <td>Wien</td>
                                </tr>
                                <tr>
                                    <td>Startdatum</td>
                                    <td>2.9.15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>                
                </div>
                <div id="buchung2" class="tab-pane fade">
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Zahlungsmethoden</div>
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Zahlungsmethode</td>
                                        <td>Post</td>
                                    </tr>
                                    <tr>
                                        <td>Kartennummer</td>
                                        <td>**** 5555</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Reisedetails</div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Reiseziel</td>
                                    <td>Rom</td>
                                </tr>
                                <tr>
                                    <td>Startdatum</td>
                                    <td>23.6.15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div> 
                </div>
                <div id="buchung3" class="tab-pane fade">
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Zahlungsmethoden</div>
                        <div class="panel-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Zahlungsmethode</td>
                                        <td>Mastercard</td>
                                    </tr>
                                    <tr>
                                        <td>Kartennummer</td>
                                        <td>**** 4444</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-danger">Danger</button>
                        </div>
                    </div>
                    <div class="panel panel-default col-md-6">
                        <div class="panel-heading">Reisedetails</div>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Reiseziel</td>
                                    <td>Basel</td>
                                </tr>
                                <tr>
                                    <td>Startdatum</td>
                                    <td>23.9.15</td>
                                </tr>
                            </tbody>
                        </table>

                    </div> 
                </div>

            </div>
        </div>
    </div>
</div>
</div>

@stop
