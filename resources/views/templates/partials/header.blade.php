<html lang="en">
    <head>
        <title>welcome to reisetouri.ch</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 60px; padding-bottom: 30px">
        <!--Kopfzeile mit Logo, kleinem Nav und Login Formular-->

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo.jpg" height="30" width="35"/></a> <!--Logo-->
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav"> <!--kleiner Nav-Bar, für den Fall-->
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('customerLogin')}}">Profil</a></li>
                        <li><a href="{{url('registration')}}">Registrieren</a></li>
                        <li><a href="{{url('adminOverview')}}">AdminOverview</a></li>
                        <li><a href="{{url('adminTripEdit')}}">AdminTripEdit</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <!--Login Formular-->
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Login
                                    <span class="caret"></span></button>
                                <a href="#"><ul class="dropdown-menu"></a>
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
                                <form class="form" role="form" method="POST" action="/auth/login">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label for="email">Email:</label>
                                        <input type="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                    </div>
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                    <button type="submit" class="btn btn-default" >Submit</button>
                                    <a href="{{url('auth/password')}}">Forgot Your Password?</a>
                                </form>


                    </ul>
                </div>
                </li>
                </ul>
            </div>
        </div>
    </nav>

