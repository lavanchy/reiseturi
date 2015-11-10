<!-- Header/Footer -->
@extends ('templates.default')
<!--content -->
@section ('content')
<div class="container">
    <h2>Reisen bearbeiten</h2>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
        <li><a data-toggle="tab" href="#menu2">+</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="col-md-4 panel panel-default">
                <div class="well">
                    <h2>Reisebeschrieb</h2>
                    <form role="form">
                        <div class="form-group">
                            <label for="describtion">Beschreibung</label>
                            <textarea class="form-control" id="describtion" placeholder="Enter describtion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" placeholder="Enter details"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Preis</label>
                            <input type="number" class="form-control" id="price" placeholder="Preis">
                        </div>
                        <button type="submit" class="btn btn-default">Änderungen speichern</button>
                        <button type="submit" class="btn btn-default disabled">Änderungen speichern</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 panel panel-default">
                <div class="well">
                    <h2>Passagierliste</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Buchungsnummer</th>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>Personen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-info">Drucken</button>
                    <button type="button" class="btn btn-default">Bearbeiten</button>
                </div>
            </div>
            <div class="col-md-8 panel panel-default">
                <div class="well">
                    <h2>Ausgaben</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rechnungsnummer</th>
                                <th>Art</th>
                                <th>Gläubiger</th>
                                <th>Kosten</th>
                                <th>Beschreibung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Hotel</td>
                                <td>Bellevue</td>
                                <td>200</td>
                                <td>Essen</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Bus</td>
                                <td>Frank</td>
                                <td>400</td>
                                <td>Reifenwechsel</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Bus</td>
                                <td>Ursi Putzer</td>
                                <td>100</td>
                                <td>Reinigung</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th>Reise Wien</th>
                                <th>700</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-default">Zahlung hinzufügen</button>
                </div>
            </div>
            <div class="col-md-4 panel-default">
                <div class="well">
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
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2>Optionen</h2>
                    <button type="button" class="btn btn-danger">Reise absagen</button>
                    <button type="button" class="btn btn-success">Reise klonen</button>
                </div>
            </div>

        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="col-md-4 panel panel-default">
                <div class="well">
                    <h2>Reisebeschrieb</h2>
                    <form role="form">
                        <div class="form-group">
                            <label for="describtion">Beschreibung</label>
                            <textarea class="form-control" id="describtion" placeholder="Enter describtion"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="details">Details</label>
                            <textarea class="form-control" id="details" placeholder="Enter details"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="price">Preis</label>
                            <input type="number" class="form-control" id="price" placeholder="Preis">
                        </div>
                        <button type="submit" class="btn btn-default">Änderungen speichern</button>
                        <button type="submit" class="btn btn-default disabled">Änderungen speichern</button>
                    </form>
                </div>
            </div>
            <div class="col-md-8 panel panel-default">
                <div class="well">
                    <h2>Passagierliste</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Buchungsnummer</th>
                                <th>Vorname</th>
                                <th>Nachname</th>
                                <th>Personen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>July</td>
                                <td>Dooley</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-info">Drucken</button>
                    <button type="button" class="btn btn-default">Bearbeiten</button>
                </div>
            </div>
            <div class="col-md-8 panel panel-default">
                <div class="well">
                    <h2>Ausgaben</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Rechnungsnummer</th>
                                <th>Art</th>
                                <th>Gläubiger</th>
                                <th>Kosten</th>
                                <th>Beschreibung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0001</td>
                                <td>Hotel</td>
                                <td>Bellevue</td>
                                <td>200</td>
                                <td>Essen</td>
                            </tr>
                            <tr>
                                <td>0002</td>
                                <td>Bus</td>
                                <td>Frank</td>
                                <td>400</td>
                                <td>Reifenwechsel</td>
                            </tr>
                            <tr>
                                <td>0003</td>
                                <td>Bus</td>
                                <td>Ursi Putzer</td>
                                <td>100</td>
                                <td>Reinigung</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th>Reise Wien</th>
                                <th>700</th>
                                <th></th>
                            </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-default">Zahlung hinzufügen</button>
                </div>
            </div>
            <div class="col-md-4 panel-default">
                <div class="well">
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
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h2>Optionen</h2>
                    <button type="button" class="btn btn-danger">Reise absagen</button>
                    <button type="button" class="btn btn-success">Reise klonen</button>
                </div>
            </div></div>
        <div id="menu2" class="tab-pane fade">
            <p>neue Reise wird geöffnet</p>
        </div>
    </div>
</div>
@stop
