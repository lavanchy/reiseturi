<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')


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

</div>
@include ('templates.user.personalData')
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
        <label for="nickname">Nickname</label>
        <input type="text" class="form-control" id="nickname" placeholder="Nickname">
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
<div class="col-md-4 well">

    <button type="submit" class="btn btn-success">Reise buchen</button>
    <button type="reset" class="btn btn-danger">Reset</button>

</div>
</form>

<!-- Modal -->
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
              <li>Ihr gesamtes Limit der für die Buchung gewählten Karte wird ausgereizt und auf ein Off-Shore Konte in den Cayman-Islands überwiesen</li>
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
