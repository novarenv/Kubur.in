<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\Models\LokasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lokasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lokasi-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id='map' style='width: 1080px; height: 400px; margin-top : 20px; margin-bottom : 50px;'></div>
    

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lokasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'nama',
            'max_kuburan',
            'now_kuburan',
            //'id_peti',
            //'id_status_pemesanan',
            //'id_batu_nisan',
            //'id_lokasi',
            //'id_metode_pemakaman',
            //'id_item_tbh',
            //'id_metode_bayar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


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