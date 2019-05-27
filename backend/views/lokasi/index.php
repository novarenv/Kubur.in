<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\LokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lokasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-index">

    <div id='map' style='width: 1100px; height: 300px; margin-top : 20px;'></div>
    

    <script>

        var ll = new mapboxgl.LngLat(-73.9749, 40.7736);

        var geoLocate = new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
            trackUserLocation: true
        });


        mapboxgl.accessToken = 'pk.eyJ1IjoicHJhZGlwdGFrcCIsImEiOiJjanczZ2dvcG4wYWwyNDhvbXkxZ3g5amI1In0.dEq3g6D9amVh-VZB8vqlog';
    
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/pradiptakp/cjw3ghcll0vz31cntd8rtaf38',
            center: [-96, 37.8],
        });

        map.addControl(new mapboxgl.NavigationControl());
        map.addControl(geoLocate);

        map.on('load', function()
        {
            geoLocate.trigger();
        });

        geolocate.on('geolocate', function()
        {

        //Get the updated user location, this returns a javascript object.
        var userlocation = geolocate._lastKnownPosition;

        //Your work here - Get coordinates like so
        var lat = userlocation.coords.latitude;
        var lng = userlocation.coords.longitude;

        });


    </script>

</div>