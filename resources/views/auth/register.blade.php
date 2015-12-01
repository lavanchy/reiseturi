@extends('templates.default')
<!-- 
tutorial chapter 4 https://laraveltips.wordpress.com/category/user-login-and-registration/
source: https://gist.github.com/evercode1/44fc2185e3546d9609ef
-->
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

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

                    <form class="form-horizontal" role="form" method="POST" action="/auth/register">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Vorname</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="firstName" value="{{ old('firstName') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Strasse</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street" value="{{ old('street') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">PLZ</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="plz" value="{{ old('plz') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ort</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="{{ old('city') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Telephon</label>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>

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
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@stop