<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carnival Sponsor</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
@include('test-data')

    @yield('content')
    <footer>
        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h5>Contact Us</h5>
                        <h5>Privacy Policy</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5>Features</h5>
                        <h5>Help Desk</h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5>Follow Us</h5>
                        <a href="{{ url('/') }}"><i class="fa fa-btn fa-facebook"></i></a>
                        <a href="{{ url('/') }}"><i class="fa fa-btn fa-twitter"></i></a>
                        <a href="{{ url('/') }}"><i class="fa fa-btn fa-google-plus"></i></a>
                    </div>
                </div><!-- end row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h5>Copyright &copy; 2017 Carnival Sponsor</h5>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end navbar-fixed bottom -->
    </footer>

    
</body>
</html>
