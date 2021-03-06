<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Media.css')}}">
    <link rel="icon" href="{{ asset('img/logo_new.png')}}">
    <title>my-easysharing | Ansicht</title>
</head>
<body id="suche">

@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active">
            <img src="{{ asset('https://s3.eu-central-1.amazonaws.com/weteuploadss2017'.$vermietungen->bild)}}" alt="<?php echo $vermietungen->bild;?>">
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <div class="row">
        <form ><!--action="" method="post" enctype="multipart/form-data-->
        <div class="col-lg-6 lol">
            <div class='input-group date' id='datetimepicker8'>
                <input type="text" class="form-control" name="startdate" id="startdate" required>
                <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
        </div>
        <div class="col-lg-6 lol">
                <div class='input-group date' id='datetimepicker9'>
                    <input type="text" class="form-control" name="enddate" id="enddate" required>
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </form>
        </div>
    </div>

<script>
    $(function () {
        var dateFormat = "yy-mm-dd",
            from = $("#startdate")
                .datepicker({
                    dateFormat: "yy-mm-dd",
                    defaultDate: "0w",
                    changeMonth: true,
                    numberOfMonths: 3,
                    minDate: "{{$vermietungen->startdate}}",
                    maxDate: "{{$vermietungen->enddate}}",
                    monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                    monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                    dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                    dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                    dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
                })
                .on("change", function () {
                    to.datepicker("option", "{{$vermietungen->startdate}}", getDate(this));
                }),
            to = $("#enddate").datepicker({
                //      defaultDate: "0w",
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                numberOfMonths: 3,
                minDate: "{{$vermietungen->startdate}}",
                maxDate: "{{$vermietungen->enddate}}",
                monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                    'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
            })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-lg-6 eigenschaft">
            <p><b>Marke:</b></p>
            <p>{{$vermietungen->marke}}<br><br></p>
            <p><b>Modell:</b></p>
            <p>{{$vermietungen->modell}}<br><br></p>
            <p><b>Autofarbe:</b></p>
            <p>{{$vermietungen->farbe}}<br><br></p>
            <p><b>Kraftstoff:</b></p>
            <p>{{$vermietungen->kraftstoff}}<br><br></p>
            <p><b>Baujahr:</b></p>
            <p>{{$vermietungen->baujahr}}<br><br></p>
            <p><b>Details:</b></p>
            <p>{{$vermietungen->details}}<br><br></p>
            <p><b>Preis pro Tag:</b></p>
            <p name="price">{{$vermietungen->preis}} €<br><br></p>
            <p><b>Standort:</b><br></p>
            <p>{{$vermietungen-> strasseNr}}, {{$vermietungen-> postleitzahl}} {{$vermietungen-> ort}}</p>
        </div>

        <div class="col-md-4 col-lg-6">
            <div id="googleMap"></div>
            <script>
                function myMap() {
                    var geocoder = new google.maps.Geocoder();
                    geocoder.geocode({
                        address: '{{$vermietungen->ort}},{{$vermietungen->postleitzahl}},{{$vermietungen->strasseNr}}'
                    }, function (geocoderResults, status) {
                        if (status === 'OK') {
                            var latlng = geocoderResults[0].geometry.location;
                            var pos =  new google.maps.LatLng(latlng.lat(), latlng.lng());
                            var mapOptions = {center: pos, zoom: 15};
                            var map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);
                            var newMarker = new google.maps.Marker({
                                map: map,
                                position: pos,
                                icon: '/img/car.png',
                                title: "{{$vermietungen->strasseNr}}, {{$vermietungen->postleitzahl}} {{$vermietungen->ort}}"
                            });
                        }
                    })

                }
            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE&callback=myMap&v=3.9"></script>
            <script async defer src="https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyDwMqjnRKeOyaE7nTvPYtFpqaURd02ZpxE"></script>
        </div>
    </div>
</div>

<div class="container btRent">
    <a href="/Bezahlen">
        <button id="btMieten" class=" btn btn-basic" type="submit">Mieten</button>
    </a>
</div>
<!--
<div class="container">
    <div class="row">
        <div class="col-md-3 col-lg-4">
            <p id="kon">Anbieter kontaktieren:</p>
        </div>
        <div class="col-md-2 col-lg-6">
            <input id="AnsichtBetreff" type="text" placeholder="Betreff">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <textarea id="areaKontakt" rows="6" cols="50" name="comment" form="usrform"
                      placeholder="Die Fragen.."></textarea>
        </div>
        <div class="col-md-2 col-lg-2 lil">
            <button id="btAnliegen" class=" btn btn-basic" type="button">Abschicken</button>
        </div>
    </div>
</div>-->


<?php
Session::put('price' , $vermietungen->preis);

?>
@include('includes.footer')
</body>
</html>
