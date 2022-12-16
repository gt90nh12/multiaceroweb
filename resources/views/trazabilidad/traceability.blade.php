@extends('layouts\admin') 
@section('content')

<link rel="stylesheet" href="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/css/ol.css" type="text/css">
<script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.3.0/build/ol.js"></script>
<div id="map" style="width: 600px; height: 400px;"></div>
<script type="module">
	var attribution = new ol.control.Attribution({
		collapsible: false
	});

	var map = new ol.Map({
		controls: ol.control.defaults({attribution: false}).extend([attribution]),
		layers: [
		new ol.layer.Tile({
			source: new ol.source.OSM({
				url: 'https://tile.openstreetmap.be/osmbe/{z}/{x}/{y}.png',
				attributions: [ ol.source.OSM.ATTRIBUTION, 'Tiles courtesy of <a href="https://geo6.be/">GEO-6</a>' ],
				maxZoom: 18
			})
		})
		],
		target: 'map',
		view: new ol.View({
			center: ol.proj.fromLonLat([4.35247, 50.84673]),
			maxZoom: 18,
			zoom: 12
		})
	});
</script>
@stop
