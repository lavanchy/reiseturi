<!--------------------------------------------- Start Template-------------------------------------------------------------------->

<div class="col-md-6 panel panel-default">
    <!--Cover Flow
            WICHTIG!!: data-target="myCarousel(x) greift auf die diversen Wrapper zu, am besten x=ID-->
    <div id="myCarousel{{$RID}}" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel{{$RID}}" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel{{$RID}}" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            @foreach($pics as $pic)
            <div class="item @if($pic!=reset($pics)) active @endif">
                <img src="images/startpage/{{$pic}}.jpg" alt="Chania" width="760" height="345">
            </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel{{$RID}}" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel{{$RID}}" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <h2>{{$tripName}}</h2><!--Ersetzen durch JS-Titel-->
    <!--Nav-Tabs, immer dieselben
    WICHTIG!!: href="variabel(x)" muss generiert werden, da sie immemr auf dieselbe Liste zugreift, am besten x=ID-->
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#beschreibung{{$RID}}">Beschreibung</a></li>
        <li><a data-toggle="tab" href="#daten{{$RID}}">Daten</a></li>
        <li><a data-toggle="tab" href="#preise{{$RID}}">Preise</a></li>
        <li><a data-toggle="tab" href="#buchen{{$RID}}">Buchen</a></li>
    </ul>

    <div class="tab-content"> <!--Inhalt der Reise-->
        <div id="beschreibung{{$RID}}" class="tab-pane fade in active">
            <h3>Beschreibung</h3>
            <p>{{$describtion}}</p>
        </div>
        <div id="daten{{$RID}}" class="tab-pane fade">
            <h3>Daten</h3>
            <p>{{$data}}</p>
        </div>
        <div id="preise{{$RID}}" class="tab-pane fade">
            <h3>Preise</h3>
            <p>{{$price}}</p>
        </div>
        <div id="buchen{{$RID}}" class="tab-pane fade">
            <h3>Buchen</h3>
            <p>{{$booking}}</p>
        </div>
    </div>
</div>
     