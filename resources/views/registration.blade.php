<!--Hier kann sich der Kunde für eine Reise registrieren. Wenn er bereits Kunde war, werden seine bisherigen Daten eingefügt.
    Er kann seine Zahlungsmethode bei jeder Buchung neu bestimmen.
    Falls der Kunde noch kein Login hat, muss er seine persönlichen Daten ein Passwort definieren, um seine Buchung abzuschliessen.
    -->
<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')
<!-- Hier werden die Reisedetails der gewählten Reise eingefügt
    @param RID
-->
<div class="col-md-12 panel panel-default">
    <div class="panel-heading">Reisedetails</div>
    <div class="panel-body">HIER WERDEN DIE REISEDATEN REINKOPIERT PER LARAVEL, EIN SO TOLLES PROGRAMM!!
        <div class="container col-md-4">
            <div class="panel panel-default">
                <p>Die Daten sollen idealerweise mit assoc aus den Datenbanken entstehen</p>            
                <table class="table col-md-6">
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
            </div>
        </div>
        <div class="container col-md-4">
            <div class="panel panel-default">           
                <table class="table col-md-6">
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
            </div>
        </div>
    </div>
</div>
<!--START FORMULAR-->
<form action="{{url('auth/register')}}" method="POST">
    <!--Hier werden die persönlichen Daten erfasst und die Anzahl Personen eingegeben, welche bei der Buchung berücksichtigt werden. -->
    <div class="col-md-4 well">
    @include ('templates.user.personalData')
        <div class="form-group">
            <label for="numberOfPersons">Anzahl Personen</label>
            <input type="number" class="form-control" id="numberOfPersons" placeholder="Anzahl">
        </div>
    </div>
   <!-- Hier wird die Zahlungsart definiert -->
    <div class="col-md-4 well">
        <h2>Zahlungsart</h2>

        <div class="form-group">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Zahlungsart
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li><div class="radio"><label><input type="radio" name="card" value="Mastercard" checked> Mastercard</label></div></li>
                    <li><div class="radio"><label><input type="radio" name="card" value="Visa" checked> Visa</label></div></li>
                    <li><div class="radio"><label><input type="radio" name="card" value="PostCard" checked> Post Card</label></div></li>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <label for="cardnumber">Kartennummer</label>
            <input type="text" class="form-control" id="cardnumber" placeholder="Kartennummer">
        </div>
        <div class="form-group">
            <label for="securitycode">Security Code</label>
            <input type="text" class="form-control" id="securitycode" placeholder="Security Code">
        </div>
        <div class="form-group">
            <label for="month">Monat</label>
            <input type="text" class="form-control" id="month" placeholder="Monat">
        </div>
        <div class="form-group">
            <label for="year">Jahr</label>
            <input type="text" class="form-control" id="year" placeholder="Jahr">
        </div>
        <div class="form-group">
            <label for="cardName">Name des Karteninhabers</label>
            <input type="text" class="form-control" id="cardName" placeholder="Vollständiger Name des Karteninhabers">
        </div>

    </div>
   <!-- Hier werden die AGB's festgehalten, ausserdem kann hier das Passwort definiert werden.-->
    <div class="col-md-4 well">

        <h2>AGB & Login</h2>

        <div class="checkbox">
            <label>
                <input type="checkbox"> Ich akzeptiere die <a data-toggle="modal" data-target="#AGBmodal">AGB</a>
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Ich möchte den Newsletter abonnieren
            </label>
        </div>
        <div class="form-group">
            <label for="password">Passwort</label>
            <input type="password" class="form-control" id="password" placeholder="Passwort">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Passwort wiederholen</label>
            <input type="password" class="form-control" id="confirmPassword" placeholder="Passwort">
        </div>
    </div>
   <!-- Formularbuttons Submit und Reset -->
    <div class="col-md-4 well">

        <button type="submit" class="btn btn-success">Reise buchen</button>
        <button type="reset" class="btn btn-danger">Reset</button>

    </div>
</form>
<!-- Ende Formular -->
<!-- Modal zu AGB -->
<div class="modal fade" id="AGBmodal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">AGB von reisetouri.ch</h4>
            </div>
            <div class="modal-body">
                <p>Das sind die wichtigsten Punkte, die Sie zu kennen haben:</p>
                <ul>
                    <li>Ihr gesamtes Limit der für die Buchung gewählten Karte wird ausgereizt und auf ein Off-Shore Konto auf den Cayman-Islands überwiesen</li>
                    <li>Während den Reisen werden in keiner Weise Unterhaltungsmittel erlaubt. Selbst mitgebrachte Unterhaltungsmedien werden vor der Fahrt von unserem Personal fachgerecht entsorgt.</li>
                    <li>Sofern Sie Beschwerden zu unseren Dienstleistungen hervorbringen, wenden Sie sich bitte an halsbrecher@gefaengnis-bl.ch, unserem Partner bei Beschwerdefällen</li>
                    <li>Sobald Sie dieses Fenster verlassen, sind Sie mit den hier aufgeführten Regeln einverstanden. Der erste Punkt wird nach dem Klick unverzüglich eingeleitet.</li>
                    <!--optional bei close die checkbox auf true setzen und disable-->
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

@stop
