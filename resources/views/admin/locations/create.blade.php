@extends('admin.layouts.form')

@section('content')
<?php
$lang = App::getLocale();
$text = "text-left";
$pull = "pull-left";
if ($lang == "ar") {
    $text = "text-right";
    $pull = "pull-right";
}
?>
<!-- Content Header (location header) -->
<section class="content-header">
    <h1>
        {{trans('admin.locations')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/locations')}}"> {{trans('admin.locations')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.location_add')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.location_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/locations')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="box-body">
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

                        <div id="mapCanvas" class="col-md-12" style="height: 300px;width: 100%;"></div>
                        <div class="col-lg-6 col-md-12">
                            <div class="row">
                                <input type="hidden" value="" id="latitude" name="latitude">
                                <input type="hidden" value="" id="longitude" name="longitude">
                            </div>
                            {{-- <div class="form-group col-md-12">
                                <div id="location-picker" class="location-picker" style="height: 300px; width: 100%;"></div>
                            </div> --}}
        
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                            <a href="{{URL::to('admin/locations')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
                        </div>
            
                    </form>
            
                </div>
            
            </section>
            
            @endsection
            @section('scripts')
            
            
            <script
            src="https://maps.googleapis.com/maps/api/js?key={!!env('MAP_KEY')!!}&callback=initMap&language=ar®ion=EG"></script>
        <script>
            $('#latitude').val('');
            $('#longitude').val('');
            var marker;
            var lat;
            var lng;
            var map;
            function updateMarkerPosition(latLng) {
                document.getElementById('latitude').value = latLng.lat();
                document.getElementById('longitude').value = latLng.lng();
            }
            function placeMarker(location) {
                if (marker) {
                    marker.setPosition(location);
                } else {
                    marker = new google.maps.Marker({
                        position: location,
                        map: map
                    });
                }
            }
            function initialize() {
                var lat = document.getElementById('longitude').value;
                var lng = document.getElementById('longitude').value;
                if (!lat && !lng) {
                    var latLng = new google.maps.LatLng(24.598411724742483, 46.7138671875);
                } else {
                    var latLng = new google.maps.LatLng(lat, lng);
                }
                map = new google.maps.Map(document.getElementById('mapCanvas'), {
                    zoom: 5,
                    center: latLng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                marker = new google.maps.Marker({
                    position: latLng,
                    map: map
                });
                marker.set(map);
                updateMarkerPosition(latLng);
                google.maps.event.addListener(map, 'click', function (event) {
                    placeMarker(event.latLng);
                    updateMarkerPosition(event.latLng);
                });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

{{-- <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyArHq-ht9Pogdi52m2J3x67pUcfSG0dGAI'></script>
<script src="{{asset('site/js/locationpicker.jquery.js')}}"></script>
<script>
    $('.location-picker').locationpicker({
        location: {
            latitude: 46.15242437752303,
            longitude: 2.7470703125
        },
        inputBinding: {
            latitudeInput: $('.latitude'),
            longitudeInput: $('.longitude'),
            radiusInput: $('#radius'),
            locationNameInput: $('#location')
        },
        enableAutocomplete: true
    });
    //http://logicify.github.io/jquery-locationpicker-plugin/
</script> --}}
    
    @endsection
   