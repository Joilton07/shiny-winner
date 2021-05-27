<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="../viewAm/core.js"></script>
<script src="../viewAm/charts.js"></script>
<script src="../viewAm/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4charts.XYChart);

var data = [];
var value = 50;
<?php 
  // var_dump($respApi[0]["Date"]);
  foreach ($respApi as $key => $value) : 
?>
// for(var i = 0; i < 10; i++){
//   var date = new Date();
//   date.setHours(0,0,0,0);
//   date.setDate(i);
//   value -= Math.round((Math.random() < 0.5 ? 1 : -1) * Math.random() * 10);
  data.push({date:'<?= $value["Date"]?>', value: <?= $value["Active"]?>});
// }

<?php 
 endforeach;
?>
chart.data = data;

// Create axes
var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
dateAxis.renderer.minGridDistance = 60;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.dateX = "date";
series.tooltipText = "{value}"

series.tooltip.pointerOrientation = "vertical";

chart.cursor = new am4charts.XYCursor();
chart.cursor.snapToSeries = series;
chart.cursor.xAxis = dateAxis;

//chart.scrollbarY = new am4core.Scrollbar();
chart.scrollbarX = new am4core.Scrollbar();

}); // end am4core.ready()
</script>

<!-- HTML -->
<div id="chartdiv"></div>
<h3>
  <?php 
    echo $respApi[0]["Country"]."<br>Casos Ativo no Pais";
  ?>
</h3>