<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Driven Charts Demo | Daniel Drave</title>



		<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Top Oil Reserves"
	},
	axisY: {
		title: "Reserves(MMbbl)"
	},
	data: [{
		type: "column",
		showInLegend: true,
		legendMarkerColor: "grey",
		legendText: "MMbbl = one million barrels",
		dataPoints: [
			{ y: 3008780, label: "Venezuela" },
			{ y: 266455,  label: "Saudi" },
			{ y: 169709,  label: "Canada" },
			{ y: 158400,  label: "Iran" },
			{ y: 142503,  label: "Iraq" },
			{ y: 101500, label: "Kuwait" },
			{ y: 97800,  label: "UAE" },
			{ y: 80000,  label: "Russia" }
		]
	}]
});
chart.render();

}
</script>
</head>
<body>

<div id="wrapper">
	<div id="credits">
		<div class="row">
			<div class="col-sm-6">
				<h1>Demo ChartJS - Live Demo</h1>
			</div>


		</div>
	</div>
<?php
$one= array();
$two= array();
$three= array();
$four= array();
$five= array();
$six= array();
function changeData($transform){
 if ($transform <= 15) {
		 return 'color: "cornflowerblue",  highlight: "lightskyblue",';
 } elseif ($transform >= 16 && $transform <= 30) {
		 return 'color: "lightgreen",  highlight: "yellowgreen",';
 }elseif ($transform >= 31) {
		 return 'color: "red",  highlight: "red",';
 }else{
		 return 'color: "orange",  highlight: "darkorange",';
 }
}
foreach ($data as $th) {

switch ($th->Sensores_id) {
case 1:
	$one[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
	break;
// case 2:
// 	$two[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
// 	break;
// case 3:
// 	$three[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
// 	break;
// case 4:
// 	$four[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
// 	break;
// case 5:
// 	$five[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
// 	break;
// case 6:
// 	$six[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
// 	break;
// default:
// 	echo "Your favorite color is neither red, blue, nor green!";
}

			}
			$fastOne = substr(implode(" ",$one), 0, -1);
			echo "var dataOne = [".$fastOne."]; \n";

			// $fastTwo = substr(implode(" ",$two), 0, -1);
			// echo "var dataTwo = [".$fastTwo."]; \n";
			//
			// $fastThree = substr(implode(" ",$three), 0, -1);
			// echo "var dataThree = [".$fastThree."]; \n";
			//
			// $fastFour = substr(implode(" ",$four), 0, -1);
			// echo "var dataFour = [".$fastFour."]; \n";
			//
			// $fastFive = substr(implode(" ",$five), 0, -1);
			// echo "var dataFive = [".$fastFive."]; \n";
			//
			// $fastSix = substr(implode(" ",$six), 0, -1);
			// echo "var dataSix = [".$fastSix."]; \n";

		?>




<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>
