<!--Hier wird der Bereich angezeigt, wo der Kunde nach erfolgreichem Login seine Reisen und Daten begutachten und teilweise bearbeiten kann-->
<!-- Header/Footer -->
@extends ('templates.default')
<!--content -->
@section ('content')
<!--Hier kann der Kunde seine persönlichen Daten begutachten.
    Mit dem Button Bearbeiten erscheint ein Modal mit dem Bearbeitugnsfeld für die persönlichen Daten.-->
<div class="container col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">Persönliche Daten</div>
        <div class="panel-body">


            <p>Die Daten sollen idealerweise mit assoc aus den Datenbanken entstehen</p>            
            <table class="table">
                <tbody>
                    <tr>
                        <th>Vorname</th>
                        <td>John</td>
                    </tr>
                    <tr>
                        <th>Nachname</th>
                        <td>Hofer</td>
                    </tr>
                </tbody>
            </table>
            <!-- Hier wird das Modal erzeugt-->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#UserModal">Bearbeiten</button>
            <div class="modal fade" id="UserModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Formular, um persönliche Daten zu bearbeiten-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Bitte füllen Sie das Formular aus</h4>
                        </div>
                        <div class="modal-body">
                            @include ('templates.user.personalData')
                            <button type="submit" class="btn btn-default">Änderungen speichern</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--Hier werden die Buchungen in Tabs angezeigt, jede Buchung ist ein Tab
    @param BID
    Es werden die Zahlungsmodalitäten angezeigt und die Reisedaten
    @param BID
    @param RID
    -->
<div class="container col-md-8">
    <div class="panel panel-default"> 
        <div class="panel-heading">Buchungen</div>
        <div class="panel-body">
            <p>Auch hier die Daten aus der Datenbank</p>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#buchung1">Buchung 1</a></li>
                <li><a data-toggle="tab" href="#buchung2">Buchung 2</a></li>
                <li><a data-toggle="tab" href="#buchung3">Buchung 3</a></li>
            </ul>

            <div class="tab-content">
<!--START BUCHUNG 1 -->
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
                            <button type="button" class="btn btn-danger">Reise stonieren</button>
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
<!--ENDE BUCHUNG 1 -->
<!--START BUCHUNG 2 -->
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
<!-- ENDE BUCHUNG 2-->
<!-- START BUCHUNG 3-->
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
<!-- ENDE BUCHUNG 3-->
            </div>
        </div>
    </div>
</div>
</div>

@stop
