@extends('admin.layouts.table')

@section('content')
<?php
$lang = App::getLocale();
$text = "text-left";
$pull = "float-left";
$pulll = "float-right";
$datatable = "example";
if ($lang == "ar") {
    $text = "text-right";
    $pull = "float-right";
    $pulll = "float-left";
    $datatable = "example_ar";
}
?>
<!-- Content Header (location header) -->
<section class="content-header">
    <h1>
        {{trans('admin.locations')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.locations')}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            @if (Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible">
                        {{ Session::get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                </div>
            </div>
            @endif
            
            @if (Session::has('error'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible">
                        {{ Session::get('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                </div>
            </div>
            @endif

            <div class="box">
                <div class="box-header">
                    <a href="{{URL::to('admin/locations/create')}}" class="btn btn-lg bg-black">{{trans('admin.location_add')}}</a>
                   
                 </div>
                 <div id="map" class="col-md-12" style="height: 300px;width: 100%;"></div>
                 <div class="col-lg-6 col-md-12">
                     <div class="row">
                         <input type="hidden" value="" id="latitude" name="latitude">
                         <input type="hidden" value="" id="longitude" name="longitude">
                     </div>
                 </div>
             </div>

            </section>

            @endsection
            @section('scripts')
                <script>
                    $("#pac-input").focusin(function () {
                        $(this).val('');
                    });
                    $('#latitude').val('');
                    $('#longitude').val('');
                    function initAutocomplete() {
                        setTimeout(() => {
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {lat: 30.033333, lng: 31.233334},
                                zoom: 7,
                                mapTypeId: 'roadmap'
                            });
                            // move pin and current location
                            infoWindow = new google.maps.InfoWindow;
                            geocoder = new google.maps.Geocoder();
                            if (navigator.geolocation) {
                                navigator.geolocation.getCurrentPosition(function (position) {
                                    var pos = {
                                        lat: position.coords.latitude,
                                        lng: position.coords.longitude
                                    };
                                    map.setCenter(pos);
                                    var marker = new google.maps.Marker({
                                        position: new google.maps.LatLng(pos),
                                        map: map,
                                        title: 'موقعك الحالي'
                                    });
                                    markers.push(marker);
                                    marker.addListener('click', function () {
                                        geocodeLatLng(geocoder, map, infoWindow, marker);
                                    });
                                    // to get current position address on load
                                    google.maps.event.trigger(marker, 'click');
                                }, function () {
                                    handleLocationError(true, infoWindow, map.getCenter());
                                });
                            } else {
                                // Browser doesn't support Geolocation
                                handleLocationError(false, infoWindow, map.getCenter());
                            }
                            var geocoder = new google.maps.Geocoder();
                            google.maps.event.addListener(map, 'click', function (event) {
                                SelectedLatLng = event.latLng;
                                geocoder.geocode({
                                    'latLng': event.latLng
                                }, function (results, status) {
                                    if (status == google.maps.GeocoderStatus.OK) {
                                        if (results[0]) {
                                            deleteMarkers();
                                            addMarkerRunTime(event.latLng);
                                            SelectedLocation = results[0].formatted_address;
                                            console.log(results[0].formatted_address);
                                            myChangeFunction()
                                            splitLatLng(String(event.latLng));
                                            $("#pac-input").val(results[0].formatted_address);
                                        }
                                    }
                                });
                            });
                            function geocodeLatLng(geocoder, map, infowindow, markerCurrent) {
                                var latlng = {lat: markerCurrent.position.lat(), lng: markerCurrent.position.lng()};
                                /* $('#branch-latLng').val("("+markerCurrent.position.lat() +","+markerCurrent.position.lng()+")");*/
                                $('#latitude').val(markerCurrent.position.lat());
                                $('#longitude').val(markerCurrent.position.lng());
                                geocoder.geocode({'location': latlng}, function (results, status) {
                                    if (status === 'OK') {
                                        if (results[0]) {
                                            map.setZoom(8);
                                            var marker = new google.maps.Marker({
                                                position: latlng,
                                                map: map
                                            });
                                            markers.push(marker);
                                            infowindow.setContent(results[0].formatted_address);
                                            SelectedLocation = results[0].formatted_address;
                                            $("#pac-input").val(results[0].formatted_address);
                                            infowindow.open(map, marker);
                                        } else {
                                            window.alert('No results found');
                                        }
                                    } else {
                                        window.alert('Geocoder failed due to: ' + status);
                                    }
                                });
                                SelectedLatLng = (markerCurrent.position.lat(), markerCurrent.position.lng());
                            }
                            function addMarkerRunTime(location) {
                                var marker = new google.maps.Marker({
                                    position: location,
                                    map: map
                                });
                                markers.push(marker);
                            }
                            function setMapOnAll(map) {
                                for (var i = 0; i < markers.length; i++) {
                                    markers[i].setMap(map);
                                }
                            }
                            function clearMarkers() {
                                setMapOnAll(null);
                            }
                            function deleteMarkers() {
                                clearMarkers();
                                markers = [];
                            }
                            // Create the search box and link it to the UI element.
                            var input = document.getElementById('pac-input');
                            $("#pac-input").val("search");
                            var searchBox = new google.maps.places.SearchBox(input);
                            map.controls[google.maps.ControlPosition.TOP_RIGHT].push(input);
                            // Bias the SearchBox results towards current map's viewport.
                            map.addListener('bounds_changed', function () {
                                searchBox.setBounds(map.getBounds());
                            });
                            var markers = [];
                            // Listen for the event fired when the user selects a prediction and retrieve
                            // more details for that place.
                            searchBox.addListener('places_changed', function () {
                                myChangeFunction()
                                var places = searchBox.getPlaces();
                                if (places.length == 0) {
                                    return;
                                }
                                // Clear out the old markers.
                                markers.forEach(function (marker) {
                                    marker.setMap(null);
                                });
                                markers = [];
                                // For each place, get the icon, name and location.
                                var bounds = new google.maps.LatLngBounds();
                                places.forEach(function (place) {
                                    if (!place.geometry) {
                                        console.log("Returned place contains no geometry");
                                        return;
                                    }
                                    var icon = {
                                        url: place.icon,
                                        size: new google.maps.Size(100, 100),
                                        origin: new google.maps.Point(0, 0),
                                        anchor: new google.maps.Point(17, 34),
                                        scaledSize: new google.maps.Size(25, 25)
                                    };
                                    // Create a marker for each place.
                                    markers.push(new google.maps.Marker({
                                        map: map,
                                        icon: icon,
                                        title: place.name,
                                        position: place.geometry.location
                                    }));
                                    $('#latitude').val(place.geometry.location.lat());
                                    $('#longitude').val(place.geometry.location.lng());
                                    if (place.geometry.viewport) {
                                        // Only geocodes have viewport.
                                        bounds.union(place.geometry.viewport);
                                    } else {
                                        bounds.extend(place.geometry.location);
                                    }
                                });
                                map.fitBounds(bounds);
                            });
                        }, 500);
                    }
                    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                        infoWindow.setPosition(pos);
                        infoWindow.setContent(browserHasGeolocation ?
                            'Error: The Geolocation service failed.' :
                            'Error: Your browser doesn\'t support geolocation.');
                        infoWindow.open(map);
                    }
                    function splitLatLng(latLng) {
                        var newString = latLng.substring(0, latLng.length - 1);
                        var newString2 = newString.substring(1);
                        var trainindIdArray = newString2.split(',');
                        var lat = trainindIdArray[0];
                        var Lng = trainindIdArray[1];
                        $("#latitude").val(lat);
                        $("#longitude").val(Lng);
                    }
                    function myChangeFunction() {
                        var inputaddress = document.getElementById('pac-input');
                        let addressValue = inputaddress.value;
                        let addressHolder = document.getElementById('inhiddenselected')
                        addressHolder.innerText = addressValue
                        $("#inhiddenselected").val(addressValue);
                    }
                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key={!!env('MAP_KEY')!!}&libraries=places&callback=initAutocomplete&language=en&region=EG"
                    async defer></script>
            
            @endsection