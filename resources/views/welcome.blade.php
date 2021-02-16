<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray sm:items-center sm:pt-0">

            <div class="d-flex flex-row justify-content-center align-items-center bg-gray">
                <div class="card card-widget bg-white">
                  <div class="card-body card-widget-body">
                    <div class="arrow_box">
                        <p class="price">
                            $168
                            <span class="price-text"> still needed for this project</span>
                        </p>
                    </div>
                    <div class="border">
                        <div class="progress progress-widget">
                          <div class="progress-bar w-75 progress-widget-status" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="days">
                            Only 3 days
                            <span class="fund"> to fund this project</span>
                        </p>
                        <p class="donors">
                            Join the 42 other donors who have already supported this project. Every dollar helps.
                        </p>
                        <div class="btn-section">
                            <div class="inner-addon left-addon">
                                <i class="glyphicon glyphicon-usd"></i>
                                <input type="text" id="price" name="price" value="50" class="form-control" />
                            </div>
                            <a href="#" class="btn btn-custom">Give Now</a>
                        </div>

                        <a href="#" class="donation">Why give $50?</a>
                    </div>
                    <div class="btn-section">
                        <a href="#" class="btn btn-gray">Save for later</a>
                        <a href="#" class="btn btn-gray">Tell Your Friends</a>
                    </div>
                  </div>
                </div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.0.min.js" integrity="sha256-RTQy8VOmNlT6b2PIRur37p6JEBZUE7o8wPgMvu18MC4=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
