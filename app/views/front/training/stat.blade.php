@extends('layouts.default')

@section('content')

<div class="col-md-12">
    <div class="page-header">
        <a href="/training/request" class="pull-right btn btn-primary">Request for training</a>      
        <h1>Statistics</h1>
        <div class="clearfix"></div>
        <p>Lorem ipsum dolor</p>
    </div>  

    <div id="=" class="col-md-3">
        <?php $i = 0; ?>
        <h4>Skill</h4>
        <ul class="list">
        @foreach($courses as $course)
        <li><a class="" href="#">{{{ $course->title }}}</a></li>
        @endforeach
        </ul>

        <h4>Town</h4>
        <ul class="list">
        @foreach($data as $town => $value)
        <li><a class="" href="#">{{{ $town }}}</a></li>
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
foreach ($data as $place => $item) {
    $arr[] = "['$place, Tarlac, Philippines', '$item']";
}

?>

@section('script')

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
google.load('visualization', '1', { 'packages': ['map'] });
google.setOnLoadCallback(drawMap);

function drawMap() {
  var data = google.visualization.arrayToDataTable([
    ['Town', 'Course'],
    <?php echo implode(',', $arr); ?>
  ]);

var options = { showTip: true, mapType: 'normal', zoomLevel: 10 };

var map = new google.visualization.Map(document.getElementById('chart_div'));

map.draw(data, options);
};
</script>
@stop