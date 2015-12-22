<!--------------------------------------------- Hier wird der Trip generiert für die Startseite-------------------------------------------------------------------->

<div class="col-md-6 col-sm-12 panel panel-default">
    <!--Cover Flow
            WICHTIG!!: data-target="myCarousel(x) greift auf die diversen Wrapper zu, am besten x=ID-->
    <div id="myCarousel{{$trip->id}}" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel{{$trip->id}}" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel{{$trip->id}}" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($pics as $pic)
            <div class="item @if($pic!=reset($pics)) active @endif">
                <img src="images/startpage/{{$pic}}.jpg" alt="Chania" width="800" height="400">
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel{{$trip->id}}" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel{{$trip->id}}" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2>{{$trip->destination}}</h2><!--Ersetzen durch JS-Titel-->
    <!--Nav-Tabs, immer dieselben
    WICHTIG!!: href="variabel(x)" muss generiert werden, da sie immemr auf dieselbe Liste zugreift, am besten x=ID-->
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#beschreibung{{$trip->id}}">Beschreibung</a></li>
        <li><a data-toggle="tab" href="#daten{{$trip->id}}">Daten</a></li>
        <li><a data-toggle="tab" href="#preise{{$trip->id}}">Preise</a></li>
        <li><a data-toggle="tab" href="#buchen{{$trip->id}}">Buchen</a></li>
    </ul>

    <div class="tab-content"> <!--Inhalt der Reise-->
        <div id="beschreibung{{$trip->id}}" class="tab-pane fade in active">
            <h3>Beschreibung</h3>
            <p>{{$trip->description}}</p>
        </div>
        <div id="daten{{$trip->id}}" class="tab-pane fade">
            <h3>Daten</h3>
            <p>Abfahrtsort: {{$trip->depart}}</p>
            <p>Startdatum am: {{$trip->startDate}}</p>
            <p>Enddatum am: {{$trip->endDate}}</p>
        </div>
        <div id="preise{{$trip->id}}" class="tab-pane fade">
            <h3>Preise</h3>
            <p>{{$trip->preis}}</p>
        </div>
        <div id="buchen{{$trip->id}}" class="tab-pane fade">
            <h3>Buchen</h3>
            <!-- Buchungsbutton, falls noch nicht eingeloggt wird eine Abfrage gestartet
                 TODO auth-check einfügen, damit er direkt zur Registration weitergeleitet wird-->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#LoginModal{{$trip->id}}" style="margin-bottom: 15px">JETZT BUCHEN</button>

        </div>
    </div>
</div>


<!-- Model für das Aufploppen der Login-Abfrage beim Drücken des Booking-Buttons -->
@if (!Auth::check())
<div id="LoginModal{{$trip->id}}" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sind Sie bereits Kunde?</h4>
            </div>
            <div class="modal-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{url('auth/login')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                            <button type="button" class="btn btn-primary">
                                Registrieren
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>

    </div>
</div>
@endif