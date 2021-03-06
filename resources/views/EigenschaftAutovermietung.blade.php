<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    @include('includes.head')
    <title>my-easysharing | Autovermietung</title>
</head>


<body id="vermietenheader1" class="backgroundPic">

@if(Auth::user() && Auth::user()->isBenutzer())
    @include('includes.header2')
@elseif(Auth::user() && Auth::user()->isAdministrator())
    @include('includes.header3')
@else
    @include('includes.header')
@endif

<div class="container-fluid">
    <div class="row">
        <form action="{{ route('Autoeigenschaft2') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}

      <!--      <h2 class="angabenAuto">Angaben zu Ihrem Auto</h2>  -->

    <div class="autoangabe">
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Marke</p>
                        <select class="form-control" id="prod_cat_id" role="menu" aria-labelledby="dropdownMenuButton" name="marke" required>
                            <label for="marke" class="sr-only"></label>
                            <option value="0" disabled="true" selected="true">Auswählen</option>
                            @foreach($amarke as $cat)
                                <option value="{{$cat->id}}, {{$cat->name}} ">{{$cat->name}}</option>
                            @endforeach
                        </select>
                </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Modell</p>
                        <select class="form-control" id="Modell" role="menu" aria-labelledby="menu1" name="modell" required>
                            <label for="modell" class="sr-only"></label>
                            <option disabled="true" selected="true" class="form-control">Auswählen</option>
                        </select>
                </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Baujahr</p>
                        <select class="form-control" id="Farbe" role="menu" aria-labelledby="menu1" name="baujahr" required>
                            <option value="0" disabled="true" selected="true">Auswählen</option>
                            @foreach($baujahr as $bj)
                                <option value="{{$bj->jahr}}" name="baujahr">{{$bj->jahr}}</option>
                            @endforeach
                        </select>
                </div>
        </div>


        <div class="col-xs-6 col-md-3">
            <div class="buttonUndText">
                <p class="Text">Farbe</p>
                        <select class="form-control" id="#" role="menu" aria-labelledby="menu1" name="farbe" required>
                            <option value="0" disabled="true" selected="true" name="farbe">Auswählen</option>
                            @foreach($farbe as $f)
                                <option value="{{$f->name}}">{{$f->name}}</option>
                            @endforeach
                        </select>
                </div>
        </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Kraftstoff</p>
                    <select class="form-control" id="productname2" role="menu" aria-labelledby="menu1" name="kraftstoff" required>
                        <option value="0" disabled="true" selected="true">Auswählen</option>
                        @foreach($kraftstoff as $kr)
                            <option value="{{$kr->name}}" >{{$kr->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndTextFuerPreis">
                    <p class="TextPreisProTag">Preis</p>
                    <div class="form-group2">
                        <div class="input-group preis">
                            <label for="preis" class="sr-only"></label>
                            <input type="text" class="form-control" name="preis" id="inputPreis" required>
                            <span class="input-group-addon">€</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="TextBild">Bild</p>
                    <div class="input-group">
                        <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Öffnen <input id="fileToUpload" name="fileToUpload" type="file" accept="image/*" style="display: none;" multiple>
                    </span>
                        </label>
                        <input type="text" id="autobilder" name="bild" class="form-control" readonly>
                    </div>
                </div>
            </div>
        <script>
            $(function() {
                $(document).on('change', ':file', function() {
                    var files = document.getElementById("fileToUpload").files;
                    var result= files[0].name;
                    console.log(files.length);
                    if(files.length > 1) {
                        for (var i = 1; i < files.length; i++) {
                            console.log(files[i].name + i);
                            result += ", " + files[i].name;
                        }
                    }
                    document.getElementById('autobilder').value = result;
                });
            });

        </script>

            <div class="col-xs-6 col-md-3">
                <div class="buttonUndText">
                    <p class="Text">Details</p>
                    <div class="form-group2 inputDetails">
                            <textarea class="form-control detailsInput" rows="4" id="Details" name="details" placeholder="Details zum Auto ..."></textarea>
                    </div>
                </div>
            </div>
        </div>

            <div class="angabeStandort">

            <div class="col-xs-6 col-md-4">
                <div class="buttonUndTextPostleitzahl">
                    <p class="Text">Postleitzahl</p>
                    <div class="form-group3">
                        <div class="input-group">
                            <label for="postleitzahl" class="sr-only"></label>
                            <input type="text" class="form-control" name="postleitzahl" id="postleitzahl" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-map-marker"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-4">
                <div class="buttonUndTextOrt">
                    <p class="Text">Ort</p>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="ort" class="sr-only"></label>
                            <input type="text" class="form-control" name="ort" id="inputOrt" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-home"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-12 col-md-4">
                <div class="buttonUndTextstrasse">
                    <p class="Text">Straße/Nr.</p>
                    <div class="form-group3">
                        <div class="input-group">
                            <label for="strasse" class="sr-only"></label>
                            <input type="text" class="form-control" name="strasseNr" id="strasseNr" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-road"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Von</p>
                        <div class="input-group date" id='datetimepicker6'>
                            <input type='text' class="form-control" name="startdate" id="startdate" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xs-6 col-md-6">
                <div class="form-group">
                    <div class="buttonUndText">
                        <p class="TextVon">Bis</p>
                        <div class='input-group date' id='datetimepicker7'>
                            <input type="text" class="form-control" name="enddate" id="enddate" required>
                            <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <div class="buttonUndText">
                 <button type="submit" class="btn btn-basic1 btn-responsive" id="MeldeAutoAnButton">Melde mein Auto an<span
                                    class="glyphicon glyphicon-triangle-right"></span></button>
                </div>
             </div>
            </div>
        </form>
    </div>
</div>


<script>
    $( function() {
        var dateFormat = "yy-mm-dd",
            from = $("#startdate")
                .datepicker({
                    dateFormat: "yy-mm-dd",
                    defaultDate: "0w",
                    changeMonth: true,
                    numberOfMonths: 2,
                    minDate: 0,
                    monthNames: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni',
                        'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
                    monthNamesShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
                    dayNames: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
                    dayNamesShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
                    dayNamesMin: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa']
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
            to = $("#enddate").datepicker({
                //      defaultDate: "0w",
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                numberOfMonths: 2,
                minDate:0,
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


@include('includes.footer')


<script type="text/javascript">

    $(document).ready(function (){

        $(document).on('change','#prod_cat_id',function () {


            var cat_id = $(this).val();


            var div=$(this).parent().parent().parent().parent().parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findModellName')!!}',
                data:{'id':cat_id},                          //id der im ersten select gespeichert wird, wird hier ausgewählt (-> oben in value={..}})
                success:function(data){
                    //  console.log('success')

                    //  console.log(data);

                    //  console.log(data.length);  //gibt in der konsole nach auswahl der Automarke die Länge der dazugehöroigen Modelle aus
                    //also audi hat z.B. 4 Modelle bisher in der Datenbank --> Ergebnis also: 4
                    op+='<option name="modell" value="0" selected disabled>Wählen Sie aus</option>';

                    for(var i=0; i<data.length; i++){
                        op+='<option name="modell" value="'+data[i].id + ', ' +data[i].aModellname+' ">'+data[i].aModellname+'</option>';
                    }

                    div.find('#Modell').html(" ");
                    div.find('#Modell').append(op);

                },
                error:function(){

                }
            });
        });
    });

</script>

</body>


</html>