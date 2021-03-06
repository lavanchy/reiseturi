<!--Hier kann der eingeloggte Admin alle Reisen, die er bei AdminOverview ausgewählt hat, bearbeiten. Zudem kann er neue Reisen erstellen.-->
<!-- Header/Footer -->
@extends ('templates.default')
<!--content -->
@section ('content')
<div class="container">
    
    <h2>Reise nach {{$trip->destination}} bearbeiten</h2>
        <!--Hier wird der Reisebeschrieb eingefügt, entweder manuell vom Nutzer bei Neuerstellung oder
        durch Abruf aus der Datenbank bei Bearbeitung oder Klonen
        @param RID-->
        <div class="col-md-12 well">
            <h2>Reisebeschrieb</h2>
            <form role="form" method="POST" action="{{url('admin/save/'.$trip->id)}}">
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
                <button type="submit" class="btn btn-default hidden-print">Änderungen speichern</button>
            </form>

        </div>
       
        <!--Hier wird die Passagierliste angezeigt. Diese ist bei einer neuen Reise leer, bei bereits erstellter Reise (bearbeiten,klonen) wird DB abgerufen.
        AUsserdem können Teilnehmer gelöscht werden.
        @param BID-->
        <div class="col-md-6 well">
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
                        <td><a class="hidden-print" href="{{url('admin/deletePassenger/'.$trip->id.'/'.$booking->id)}}"><span class="glyphicon glyphicon-remove"></span></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Der Button für Modal, um Zahlung hinzuzufügen -->
            <button type="button" class="btn btn-info hidden-print" data-toggle="modal" data-target="#PassengerModal">Zahlung hinzüfügen</button>
            
        </div>
        <!--Hier werden die Ausgaben manuell durch den Admin eingefügt, es werden bei Klonen nie Daten übernommen, bei Bearbeitung werden sie von DB abgerufen.
        Ausserdem könnne hier Zahlungen hinzugefügt werden, indem beim Button-Klick ein Modal mit einem Formular erscheint.
        @param BillID--> 
        <div id="ausgaben" class="col-md-6 well">
            <h2>Ausgaben</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Rechnungsnummer</th>
                        <th>Art</th>
                        <th>Datum</th>
                        <th>Kosten</th>
                        <th>Beschreibung</th>
                        <th/>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr>
                        <td>{{$bill->id}}</td>
                        <td>{{$bill->invoicingParty}}</td>
                        <td>{{$bill->date}}</td>
                        <td>{{$bill->amountCHF}}</td>
                        <td>{{$bill->note}}</td>
                        <td><a class="hidden-print" href="{{url('admin/deleteBill/'.$trip->id.'/'.$bill->id)}}"><span class="glyphicon glyphicon-remove "></span></a></td>
                    </tr>
                    @endforeach
                    <!--Hier wird die Summe der Ausgaben ausgegeben-->
                    <tr>
                        <th>Total</th>
                        <th></th>
                        <th>Reise {{$trip->destination}}</th>
                        <th>{{$billSum}}</th>
                        <th></th>
                    </tr>
                </tbody>
            </table>
            <!-- Der Button für Modal, um Zahlung hinzuzufügen -->
            <button type="button" class="btn btn-info hidden-print" data-toggle="modal" data-target="#BillModal">Zahlung hinzüfügen</button>
            
            
        </div>
        
        <!-- Hier werden die Einnahmen und die Ausgaben zusammengeführt.
        Die Ausgaben werden als Summe ausgegeben
        Die Einnahmen berechnet sich aus Preis*AnzahlBuchungen-->
        <div class="col-md-6 well">
            <h2>Bilanz</h2>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Ausgaben</td>
                        <td>{{$billSum}}</td>
                    </tr>
                    <tr>
                        <td>Einnahmen</td>
                        <td>{{$income}}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Gewinn</th>
                        <th>{{$income-$billSum}}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- Hier werden die Optionen für den Admin aufgezählt
        Drucken erzeugt ein PDF mit der gesamten Reiseübersicht
        Reise absagen löscht die RID
        Reise klonen kopiert den Reisebeschrieb in eine neue Reise-->
        <div class="col-md-6 well hidden-print">
            <h2>Optionen</h2>
            <a href="{{url('admin/deleteTrip/'.$trip->id.'/'.$trip->id)}}" class="btn btn-danger">Reise absagen</a>
            <a href="{{url('admin/cloneTrip/'.$trip->id)}}" class="btn btn-success">Reise klonen</a>
        </div>

        
        <!-- Passagier Modal -->
            <div class="modal fade" id="PassengerModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Formular, um Passagier hinzuzufügen-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Bitte füllen Sie das Formular aus</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" method="POST" action="{{url('admin/passenger/'.$trip->id)}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" id="name" name="name"placeholder="Vor- und Nachname"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="countPassenger">Anzahl Personen</label>
                                    <input type="number" min="0" class="form-control" id="countPassenger" name="countPassenger" placeholder="Anzahl Personen">
                                </div>
                                <button type="submit" class="btn btn-default">Speichern</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        
        
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
                            <form role="form" method="POST" action="{{url('admin/bill/'.$trip->id)}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label for="type">Art</label>
                                    <input class="form-control" id="type" name="invoicingParty"placeholder="Hotel, Bus, etc."></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="creditor">Datum</label>
                                    <input type="date" class="form-control" id="creditor" name="date" placeholder="Name der Person/Firma">
                                </div>
                                <div class="form-group">
                                    <label for="cost">Kosten</label>
                                    <input type="number" class="form-control" min="0" id="cost" name="amountCHF" placeholder="in Franken">
                                </div>
                                <div class="form-group">
                                    <label for="billDescription">Beschreibung</label>
                                    <input class="form-control" id="billDescription" name="note" placeholder="Beschreibung">
                                </div>
                                <button type="submit" class="btn btn-default">Speichern</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    @stop
