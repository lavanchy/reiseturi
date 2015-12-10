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
            <form role="form">

                <div class="form-group">
                    <label for="destination">Zielort</label>
                    <input class="form-control" id="destination" placeholder="Zielort"></textarea>
                </div>
                <div class="form-group">
                    <label for="departs">Abfahrtsort</label>
                    <input class="form-control" id="departs" placeholder="Abfarhtsort"></textarea>
                </div>
                <div class="form-group">
                    <label for="startdate">Startdatum</label>
                    <input type="date" class="from-control" id="startdate" placeholder="Startdatum">
                </div>
                <div class="form-group">
                    <label for="enddate">Enddatum</label>
                    <input type="date" class="from-control" id="enddate" placeholder="Enddatum">
                </div>
                <div class="form-group">
                    <label for="price">Preis</label>
                    <input type="number" class="form-control" id="price" placeholder="Preis">
                </div>
                <div class="form-group">
                    <label for="description">Beschreibung</label>
                    <textarea class="form-control" id="description" placeholder="Beschreibung einfügen"></textarea>
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
                        <th>Vorname</th>
                        <th>Nachname</th>
                        <th>Personen</th>
                        <th/>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0001</td>
                        <td>John</td>
                        <td>Doe</td>
                        <td>2</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
                    <tr>
                        <td>0002</td>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>2</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
                    <tr>
                        <td>0003</td>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>1</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
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
                    <tr>
                        <td>0001</td>
                        <td>Hotel</td>
                        <td>Bellevue</td>
                        <td>200</td>
                        <td>Essen</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
                    <tr>
                        <td>0002</td>
                        <td>Bus</td>
                        <td>Frank</td>
                        <td>400</td>
                        <td>Reifenwechsel</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
                    <tr>
                        <td>0003</td>
                        <td>Bus</td>
                        <td>Ursi Putzer</td>
                        <td>100</td>
                        <td>Reinigung</td>
                        <td><span class="glyphicon glyphicon-remove"></span></td>
                    </tr>
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
            <button type="button" class="btn btn-danger">Reise absagen</button>
            <button type="button" class="btn btn-success">Reise klonen</button>
        </div>


    </div>
    @stop
