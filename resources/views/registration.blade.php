<!-- Header -->
@extends ('templates.default')
<!--content -->
@section ('content')
<body>
    <div class="col-md-4 panel panel-default">
        <div class="well">
            <h2>Personal Data</h2>
            <form role="form">
                <div class="form-group">
                    <label for="prename">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
            </form>

        </div></div>
    <div class="col-md-4 panel panel-default">
        <div class="well">
            <h2>Vertical (basic) form</h2>
            <form role="form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div></div>
<div class="col-md-4 panel panel-default">
        <div class="well">
            <h2>Vertical (basic) form</h2>
            <form role="form">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    @stop
