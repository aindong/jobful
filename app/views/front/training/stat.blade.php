@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="page-header">
        <a href="/training/request" class="pull-right btn btn-primary">Request for training</a>      
        <h1>Statistics</h1>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor</p>
    </div>  

    <div id="filter" class="col-md-3">
        <?php $i = 0; ?>
        <h4>Skill</h4>
        <ul class="list">
        @foreach($courses as $course)
        <li><a class="filter-item" data-type='course' data-id='{{{ $course->id }}}' href="#">{{{ $course->title }}}</a></li>
        @endforeach
        </ul>

        <h4>Town</h4>
        <ul class="list">
        @foreach($data as $town => $value)
        <li><a class="filter-item" data-type='town' data-id='{{{ $town }}}' href="#">{{{ $town }}}</a></li>
        @endforeach
        </ul>
    </div>

    <div class="col-md-9">
        <div id="chart_div" style="height: 600px;"></div>
    </div>

    <style type="text/css">
    .term {margin-bottom: 10px}
    
    </style>

</div>

@stop

<?php
$arr = [];
$c = 0;
foreach ($data as $place => $item) {
    // $arr[] = "['$place, Tarlac, Philippines', '$item']";
    $arr[] = "$c: {'info': 'x $item', 'address': '$place, Tarlac, Philippines'}";
    $c++;
}

$arr2 = array_splice($arr, 2);

?>

@section('script')

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script>
$(document).ready(function() {
    var geocoder;
    var locations = {};//A repository for markers (and the data from which they were constructed).
    var auto_remove = true;//When true, markers for all unreported locs will be removed.
    var map;
    var infowindow;

    var locs = {
        <?php echo implode(',', $arr); ?>
    };

    var locs2 = {
        <?php echo implode(',', $arr2); ?>
    };


    function initialize() {
        geocoder = new google.maps.Geocoder();    
        map = new google.maps.Map(document.getElementById('chart_div'), {
            zoom: 10,
            streetViewControl: false,
            center: new google.maps.LatLng(40, 0),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        infowindow = new google.maps.InfoWindow();
        set(locs);
    }
    
    function set(locs) {
        $.each(locs, function(key, location) {
            geocoder.geocode( { 'address': location.address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });

                    google.maps.event.addListener(marker, 'click', (function(key) {
                        return function() {
                            infowindow.setContent(locs[key].info);
                            infowindow.open(map, marker);
                        }
                    }) (key));
                }
            });
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

    $('.filter-item').click(function(e) {
        e.preventDefault();
        var type = $(this).attr('data-type');
        var id = $(this).attr('data-id');
        var url = '/ajax/statistics/filter?type=' + type + '&id=' + id;

        $.ajax({
            url: url,
        })
        .done(function( data ) {
            console.log(data);
            set(data);    
        });
        
    })

});
</script>
@stop