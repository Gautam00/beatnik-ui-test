<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        {{-- js --}}
        <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <!-- Styles -->
        
    </head>
    <body>
        
        <div class="container">
            <div class="row">

                @include('partials.header')

                @include('layouts.home')
                @include('layouts.product')
                @include('layouts.bestseller')
                @include('layouts.news_and_events')
                @include('layouts.daily_essentials')
                @include('layouts.diaries')

                @include('partials.footer')

            </div>
        </div>

    </body>

</html>


<script>
    function myMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoJh-qmRgVOoQvlTB2DmPJ0a4bgHFR9XI&callback=myMap"></script>