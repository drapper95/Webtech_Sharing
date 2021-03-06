<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    <title>my-easysharing | Vermieten</title>
</head>

<body id="vermietenheader1" class="backgroundPic">

@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif

    {{csrf_field()}}

    <div class="container-fluid">
        <div class="row">
            <form action="{{route('Fahrradeigenschaft3')}}" method="post">
                {{csrf_field()}}

                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Art</p>
                    <label for="art"></label>
                    <input style="text-align: center" type="text" class="form-control" name="art" value="{{$fahrradvermietungen -> art}}" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Marke</p>
                    <label for="marke"></label>
                    <input style="text-align: center" type="text" class="form-control" name="marke" value="{{$fahrradvermietungen -> marke}}" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Modell</p>
                    <label for="modell"></label>
                    <input style="text-align: center" type="text" class="form-control" name="modell" value="{{$fahrradvermietungen -> modell}}" disabled>
                </div>
                <div class="col-xs-6 col-md-3 speichern">
                    <p class="daten2">Farbe</p>
                    <label for="farbe"></label>
                    <input style="text-align: center" type="text" class="form-control" name="farbe" value="{{$fahrradvermietungen -> farbe}}" disabled>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Preis</p>
                    <label for="preis"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="preis" value="{{$fahrradvermietungen -> preis}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-euro"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Bild</p>
                    <label for="bild"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="bild" value="{{$fahrradvermietungen -> bild}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-picture"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 speichern">
                    <p class="daten2">Details</p>
                    <label for="details"></label>
                    <textarea type="text" rows="3" class="form-control details" id="detail" name="details" disabled>{{$fahrradvermietungen -> details}}</textarea>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Postleitzahl</p>
                    <label for="postleitzahl"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="postleitzahl" value="{{$fahrradvermietungen -> postleitzahl}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-map-marker"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4 speichern">
                    <p class="daten2">Ort</p>
                    <label for="ort"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="ort" value="{{$fahrradvermietungen -> ort}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-home"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 speichern">
                    <p class="daten2">Strasse/Nr.</p>
                    <label for="strasseNr"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="strasseNr" value="{{$fahrradvermietungen -> strasseNr}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-road"></span>
                    </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 speichern">
                    <p class="daten2">Von</p>
                    <label for="startdate"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="startdate" value="{{$fahrradvermietungen -> startdate}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-6 col-md-6 speichern">
                    <p class="daten2">Bis</p>
                    <label for="enddate"></label>
                    <div class="input-group">
                        <input style="text-align: center" type="text" class="form-control" name="enddate" value="{{$fahrradvermietungen -> enddate}}" disabled>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
            <!--        <form class="AGBFeld">      -->
                        <fieldset id="agb">
                            <input type="radio" name="agb" id="akzeptieren" value="ok">
                            <label for="akzeptieren">unsere <a href="/AGB">AGB</a> akzeptieren</label>
                            <br>
                            <input type="radio" name="agb" id="ablehnen" value="no" checked>
                            <label for="ablehnen">ablehnen</label>
                        </fieldset>
          <!--          </form> -->
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="buttonUndText">
                        <a href="{{ route('Fahrradeigenschaft') }}" id="Zurueck"> <button type="button" class="btn btn-basic1 btn-responsive" id="Zurueck2" data-toggle="modal" data-target="#exampleModal"><span
                                        class="glyphicon glyphicon-triangle-left"></span>Zurück</button></a>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="buttonUndText">

                            <button type="button" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton2" data-toggle="modal" data-target="#myModal" disabled>Fahrrad anmelden<span
                                        class="glyphicon glyphicon-triangle-right"></span></button>

                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"></button>
                                            <h4 class="modal-title">Vielen Dank!</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Nur noch zur Startseite & Ihr Fahrrad steht schon bereit.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="/welcome2"><button type="submit" class="btn btn-primary" data-darget="/welcome2">Zurück zur Startseite</button></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('ablehnen').checked = true;
            document.querySelector('#agb').addEventListener('click', weiter);

            function weiter() {
                if (document.getElementById('akzeptieren').checked  == true) {
                    document.getElementById('MeldeAutoAnButton2').removeAttribute('disabled');
                }
                if (document.getElementById('ablehnen').checked  == true) {
                    document.getElementById('MeldeAutoAnButton2').setAttribute('disabled','disabled');
                }
            }

        });


    </script>



    @include('includes.footer')

</body>

</html>