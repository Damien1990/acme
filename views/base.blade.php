<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            @yield('browsertitle')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/style.css">
        @yield('css')
    </head>
    <body>
        @include('topnav')
        @yield('outsidecontainer')
        <div class="container">
            <div class="row">
                <br><br>
                @include('errormessage')
            </div>
            @yield('content')
        </div>

        <div class="row footer-background">
            <div class="col-md-3 margin-left-5px">
                <div class="padding-left-8px">
                    <h4>Contact Us</h4>
                    123 Main St.<br>
                    Unionville, PA<br>
                    76543<br>
                    +1 (555) 555-1212
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3">
                <img src="/assets/map-small.png" class="pull-right">
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        @yield('bottomjs')
    </body>
</html>
