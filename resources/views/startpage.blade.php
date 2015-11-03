<!DOCTYPE html>
<html lang="en">
    <head>
        <title>welcome to reisetouri.ch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!--Kopfzeile mit Logo, kleinem Nav und Login Formular-->
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img src="images/logo.jpg" height="30" width="35"/></a> <!--Logo-->
                    </div>
                    <div>
                        <ul class="nav navbar-nav"> <!--kleiner Nav-Bar, für den Fall-->
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Profil</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <!--Login Formular-->
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login
                                        <span class="caret"></span></button>
                                    <a href="#"><ul class="dropdown-menu"></a>
                                    <li>
                                        <div class="form-inline">
                                            <label for="nickname">Nickname</label><input type="text" id="nickname" name="nickname"/>
                                            <label for="password">Passwort</label><input type="text" id="password" name="password"/>

                                            <input class="btn btn-primary" type="submit" value="Abschicken"/>
                                        </div>
                                    </li>


                        </ul>
                    </div>

                    </li>
                    </ul>
                </div>
                </div>
            </nav>

        </header>
        <!--------------------------------------------- Start Template-------------------------------------------------------------------->
        <!--container-->
        <div class="container">

            <div class="col-md-6 panel panel-default">

                <!--Cover Flow
                WICHTIG!!: data-target="myCarousel(x) greift auf die diversen Wrapper zu, am besten x=ID-->
                <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/startpage/wien1.jpg" alt="Chania" width="460" height="345">
                        </div>

                        <div class="item">
                            <img src="images/startpage/wien2.jpg" alt="Chania" width="460" height="345">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <h2>Reise 1</h2><!--Ersetzen durch JS-Titel-->
                <!--Nav-Tabs, immer dieselben
                WICHTIG!!: href="variabel(x)" muss generiert werden, da sie immemr auf dieselbe Liste zugreift, am besten x=ID-->
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#beschreibung1">Beschreibung</a></li>
                    <li><a data-toggle="tab" href="#daten1">Daten</a></li>
                    <li><a data-toggle="tab" href="#preise1">Preise</a></li>
                    <li><a data-toggle="tab" href="#buchen1">Buchen</a></li>
                </ul>

                <div class="tab-content"> <!--Inhalt der Reise-->
                    <div id="beschreibung1" class="tab-pane fade in active">
                        <h3>Beschreibung</h3>
                        <p>Ersetzen durch Beschreibungstext</p>
                    </div>
                    <div id="daten1" class="tab-pane fade">
                        <h3>Daten</h3>
                        <p>Ersetzen durch exakte Daten</p>
                    </div>
                    <div id="preise1" class="tab-pane fade">
                        <h3>Preise</h3>
                        <p>Ersetzen durch Preise</p>
                    </div>
                    <div id="buchen1" class="tab-pane fade">
                        <h3>Buchen</h3>
                        <p>Ersetzen durch Buchungsfeld</p>
                    </div>
                </div>
            </div>
            <!--------------------------------------------- Ende Template-------------------------------------------------------------------->
            <div class="col-md-6 panel panel-default">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/startpage/wien1.jpg" alt="Chania" width="460" height="345">
                        </div>

                        <div class="item">
                            <img src="images/startpage/wien2.jpg" alt="Chania" width="460" height="345">
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <h2>Reise 2</h2>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home2">Home</a></li>
                    <li><a data-toggle="tab" href="#menu4">Menu 1</a></li>
                    <li><a data-toggle="tab" href="#menu5">Menu 2</a></li>
                    <li><a data-toggle="tab" href="#menu6">Menu 3</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home2" class="tab-pane fade in active">
                        <h3>HOME</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu5" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu6" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>
