<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')
<body>
    <div class="col-md-12 panel panel-default">
        <div class="panel panel-default">
            <div class="panel-heading">Reisedetails</div>
            <div class="panel-body">HIER WERDEN DIE REISEDATEN REINKOPIERT PER LARAVEL, EIN SO TOLLES PROGRAMM!!</div>
        </div>
    </div>
    <div class="col-md-4 panel panel-default">
        <div class="well">
            <h2>Personal Data</h2>
            <form role="form">
                <div class="form-group">
                    <label for="prename">Vorname</label>
                    <input type="text" class="form-control" id="prename" placeholder="Vorname">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Nachname">
                </div>
                <div class="form-group">
                    <label for="adress">Adresse</label>
                    <input type="text" class="form-control" id="adress" placeholder="Adresse">
                </div>
                <div class="form-group">
                    <label for="PLZ">PLZ</label>
                    <input type="text" class="form-control" id="PLZ" placeholder="PLZ">
                </div>
                <div class="form-group">
                    <label for="city">Ort</label>
                    <input type="text" class="form-control" id="city" placeholder="Ort">
                </div>
                <div class="form-group">
                    <label for="tel">Telefonnummer</label>
                    <input type="text" class="form-control" id="tel" placeholder="Telefonnummer">
                </div>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email" placeholder="E-Mail Adresse">
                </div>
                <div class="form-group">
                    <label for="numberOfPersons">Anzahl Personen</label>
                    <input type="number" class="form-control" id="numberOfPersons" placeholder="Anzahl">
                </div>
        </div>
    </div>
    <div class="col-md-4 panel panel-default">
        <div class="well">
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

        </div></div>
    <div class="col-md-4 panel panel-default">
        <div class="well">
            <h2>AGB & Login</h2>

            <div class="checkbox">
                <label>
                    <input type="checkbox"> Ich akzeptiere die AGB
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
    </div>
    <div class="col-md-4 panel panel-default">
        <div class="well">
            <button type="submit" class="btn btn-success">Reise buchen</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </div>
    </div>
</form>
@stop
