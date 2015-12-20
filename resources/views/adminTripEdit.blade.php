<!--Hier kann der eingeloggte Admin alle Reisen, die er bei AdminOverview ausgewählt hat, bearbeiten. Zudem kann er neue Reisen erstellen.-->
<!-- Header/Footer -->
@extends ('templates.default')
<!--content -->
@section ('content')
<div class="container">
    <!--Das erste Tab soll generiert werden, d.h. für jede Reise, die geöffnet wurde, soll ein neuer Tab entstehen.
        Der zweite Tab soll auf die AdminOverview-Seite führe, damit dort eine weitere bereits bestehende oder eine neue Reise erstellt werden kann-->
    <h2>Reise nach Name bearbeiten</h2>
        <!--Hier wird der Reisebeschrieb eingefügt, entweder manuell vom Nutzer bei Neuerstellung oder
        durch Abruf aus der Datenbank bei Bearbeitung oder Klonen
        @param RID-->
        <div class="col-md-4 well">
            <h2>Reisebeschrieb</h2>
            <form role="form" method="POST" action="{{url('admin/save')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="destination">Zielort</label>
                    <input class="form-control" id="destination" name="destination" placeholder="Zielort" @if(isset($trip)) value="{{$trip->destination}}" @endif>
                </div>
                <div class="form-group">
                    <label for="depart">Abfahrtsort</label>
                    <input class="form-control" id="depart" name="depart" placeholder="Abfarhtsort" @if(isset($trip)) value="{{$trip->depart}}" @endif>
                </div>
                <div class="form-group">
                    <label for="startDate">Startdatum</label>
                    <input type="date" class="from-control" id="startDate" name="startDate" placeholder="Startdatum" @if(isset($trip)) value="{{date('Y-m-d', strtotime($trip->startDate))}}" @endif>
                </div>
                <div class="form-group">
                    <label for="endDate">Enddatum</label>
                    <input type="date" class="from-control" id="endDate" name="endDate" placeholder="Enddatum" @if(isset($trip)) value="{{date('Y-m-d', strtotime($trip->endDate))}}" @endif>
                </div>
                <div class="form-group">
                    <label for="preis">Preis</label>
                    <input type="number" class="form-control" id="preis" name="preis" placeholder="Preis" @if(isset($trip)) value="{{$trip->preis}}" @endif>
                </div>
                <div class="form-group">
                    <label for="description">Beschreibung</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Beschreibung einfügen">@if(isset($trip)){{$trip->description}}@endif</textarea>
                </div>
                <button type="submit" class="btn btn-default">Änderungen speichern</button>
            </form>

        </div>
        <!--Hier wird die Passagierliste angezeigt. Diese ist bei einer neuen Reise leer, bei bereits erstellter Reise (bearbeiten,klonen) wird DB abgerufen.
        AUsserdem können Teilnehmer gelöscht werden.
        @param BID-->
        <div class="col-md-8 well">
            <h2>Passagierliste</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Buchungsnummer</th>
                        <th>Name</th>
                        <th>Personen</th>
                        <th/>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                    <tr>
                        <td>{{$booking->id}}</td>
                        <td>{{$booking->name}}</td>
                        <td>{{$booking->countPasanger}}</td>
                        <td><a href="{{url('deleteBooks/'.$booking->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!--Hier werden die Ausgaben manuell durch den Admin eingefügt, es werden bei Klonen nie Daten übernommen, bei Bearbeitung werden sie von DB abgerufen.
        Ausserdem könnne hier Zahlungen hinzugefügt werden, indem beim Button-Klick ein Modal mit einem Formular erscheint.
        @param BillID--> 
        <div id="ausgaben" class="col-md-8 well">
            <h2>Ausgaben</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rechnungsnummer</th>
                        <th>Art</th>
                        <th>Gläubiger</th>
                        <th>Kosten</th>
                        <th>Beschreibung</th>
                        <th/>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr>
                        <td>0001</td>
                        <td>Hotel</td>
                        <td>Bellevue</td>
                        <td>200</td>
                        <td>Essen</td>
                        <td><a href="{{url('deleteBooks/'.$booking->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    @endforeach
                    <!--Hier wird die Summe der Ausgaben ausgegeben-->
                    <tr>
                        <th>Total</th>
                        <th></th>
                        <th>Reise Wien</th>
                        <th>700</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
            <!-- Der Button für Modal, um Zahlung hinzuzufügen -->
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#BillModal">Zahlung hinzüfügen</button>
            <!-- Zahlung Modal -->
            <div class="modal fade" id="BillModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Formular, um Zahlung hinzuzufügen-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Bitte füllen Sie das Formular aus</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="billnr">Rechnungsnummer</label>
                                    <input class="form-control" id="billnr" placeholder="Rechnungsnummer"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="type">Art</label>
                                    <input class="form-control" id="type" placeholder="Hotel, Bus, etc."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="creditor">Gläubiger</label>
                                    <input class="form-control" id="creditor" placeholder="Name der Person/Firma">
                                </div>
                                <div class="form-group">
                                    <label for="cost">Kosten</label>
                                    <input type="number" class="form-control" id="cost" placeholder="in Franken">
                                </div>
                                <div class="form-group">
                                    <label for="billDescription">Beschreibung</label>
                                    <input class="form-control" id="billDescription" placeholder="Beschreibung">
                                </div>
                                <button type="submit" class="btn btn-default">Speichern</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Hier werden die Einnahmen und die Ausgaben zusammengeführt.
        Die Ausgaben werden als Summe ausgegeben
        Die Einnahmen berechnet sich aus Preis*AnzahlBuchungen-->
        <div class="col-md-4 well">
            <h2>Bilanz</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Ausgaben</td>
                        <td>700</td>
                    </tr>
                    <tr>
                        <td>Einnahmen</td>
                        <td>1000</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Gewinn</th>
                        <th>300</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- Hier werden die Optionen für den Admin aufgezählt
        Drucken erzeugt ein PDF mit der gesamten Reiseübersicht
        Reise absagen löscht die RID
        Reise klonen kopiert den Reisebeschrieb in eine neue Reise-->
        <div class="col-md-4 well">
            <h2>Optionen</h2>
            <button type="button" class="btn btn-info">Drucken</button>
            <a href="{{url('admin/deleteTrip/{id}')}}" class="btn btn-danger">Reise absagen</a>
            <button type="button" class="btn btn-success">Reise klonen</button>
        </div>


    </div>
    @stop
