@extends('layouts.master')


<div class="container">
    <div class="row col-md-12 m-4 justify-content-center" style="width: 100%;">
        <div class="col-md-12 col-xl-6">
            <div class="card mb-0">

        <form action="{{route('arama')}}" method="POST" style="margin-bottom: 0px;">
            @csrf
            <div class="search"></i> <input type="text" class="form-control" name="sehirAra"
                                            placeholder="Şehir Ara" autocomplete="off">
                <button class="btn btn-primary">Ara</button>
            </div>
        </form>
            </div></div>
    </div>



    <div class="row justify-content-center places-list" id="places-list">

    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var secilenSehir = "{{$secilenSehir}}";
    var	CLIENT_ID = "{{$clientID}}";
    var CLIENT_SECRET = "{{$clientSecret}}";
    var copyDiv = document.getElementById('places-list-one');

    const lat = [];
    const lng = [];

    $.ajax({
        dataType: "json",
        url: "https://api.foursquare.com/v2/venues/search?ll=40.7,-74&query=coffee&client_id=" +CLIENT_ID+"&client_secret="+CLIENT_SECRET+"&near="+secilenSehir+"&v=20210817",
        data: {},
        success: function( data ) {
            console.log(data);

            var venues = data.response.venues;
            $.each(venues, function(i,venue){ ++i;
                container = document.getElementById('places-list');
                container.innerHTML += '<div class="col-md-12 col-lg-6 col-xl-4" id="places'+ i +'" style="">' +
                    '<div class="card mb-4 mt-4 card-places">' +
                    '<div class="card-body p-4" id="text" style="">' +
                    '<strong>Sıra:</strong> '+ i +'<br />' +
                    '<strong>Mekan Adı:</strong> '+ venue.name +'<br />' +
                    '<strong>Detaylı Adres:</strong> '+ venue.location.formattedAddress +'<br />' +
                    // '<strong>Harita:</strong> <a href="https://www.openstreetmap.org/?mlat='+ venue.location.lat +'&mlon='+ venue.location.lng +'#map=15/'+ venue.location.lat +'/'+ venue.location.lng +'" target="_blank"><button type="button" id="btnMap_'+ i +'" class="btn btn-primary btn-sm">   Tıkla   </button></a> <br /> ' +
                    '<strong>Harita:</strong> <a href="/harita/'+ venue.location.lat +'/'+ venue.location.lng +'"><button type="button" data-bs-toggle="modal" data-bs-target="#Modal_'+i+'" id="btnMap_'+ i +'" class="btn btn-primary btn-sm">   Tıkla   </button></a> <br /> ' +
                    //'<strong>Lat - Lng: </strong>'+ venue.location.lat + ' - '+ venue.location.lng +
                    '</div></div></div>';
                lat[i] = venue.location.lat;
                lng[i] = venue.location.lng;
            });
        },
        error: function(jqXHR, textStatus, errorThrown) {
        }
    });


</script>
