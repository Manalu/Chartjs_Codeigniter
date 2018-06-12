<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Driven Charts Demo | Daniel Drave</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>



</head>
<body>

<div id="wrapper">
	<div class="container">
 <div class="row">
 <div class="col-sm-8" >
 <canvas id="myChart" width="60" height="40"></canvas>
 </div>
 </div>
 </div>
<?php
//ONE
$one= array();
$backgroundColorOne= array();
$borderColorOne= array();
$sensorName = "";
$lableOne= array();
$dataOne= array();
//END ONE

$two= array();
$three= array();
$four= array();
$five= array();
$six= array();


function backgroundColor($transform){
	if ($transform <= 15) {
			return "'rgba(54, 162, 235, 0.2)',";
	} elseif ($transform >= 16 && $transform <= 30) {
			return "'rgba(75, 192, 192, 0.2)',";
	}elseif ($transform >= 31) {
			return "'rgba(244, 76, 111, 0.2)',";
	}else{
			return "'rgba(255, 159, 64, 0.2)',";
	}
}

function borderColor($transform){
 if ($transform <= 15) {
		 return "'rgba(54, 162, 235, 1)',";
 } elseif ($transform >= 16 && $transform <= 30) {
		 return "'rgba(75, 192, 192, 1)',";
 }elseif ($transform >= 31) {
		 return "'rgba(231, 24, 68, 1)',";
 }else{
		 return "'rgba(255, 159, 64, 1)',";
 }
}

function removeLastCaracter($asd){
	$fastOne = substr(implode(" ",$asd), 0, -1);
	return $fastOne;
}

foreach ($data as $th) {

switch ($th->Sensores_id) {
case 1:
  $lableOne[] = '"'.$th->Fecha.'",';
	$dataOne[] = $th->Temperatura.',';
	$backgroundColorOne[] = backgroundColor($th->Temperatura);
	$borderColorOne[] = borderColor($th->Temperatura);
	$sensorName = $th->Sensores_id;
	$one[] = '{value: '.$th->Humedad.', '.backgroundColor($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
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
			// $fastOne = substr(implode(" ",$one), 0, -1);
			// echo "var dataOne = [".$fastOne."]; \n";
      echo "<script>";
			echo 'var ctx = document.getElementById("myChart").getContext("2d");';
			echo "var myChart = new Chart(ctx, {";
			echo "type: 'bar',";
			echo "data: {";
			   echo 'labels: ['.removeLastCaracter($lableOne).'],';
				 echo "datasets: [{";
					 echo "label: '# Sensor ".$sensorName."',";
					  echo 'data: ['.removeLastCaracter($dataOne).'],';
						echo "backgroundColor: [".removeLastCaracter($backgroundColorOne)."],";
						echo "borderColor: [
								 ".removeLastCaracter($borderColorOne)."
						 ],";
						 echo " borderWidth: 3";
						 echo "     }]
					    },
					    options: {
					        scales: {
					            yAxes: [{
					                ticks: {
					                    beginAtZero:true
					                }
					            }]
					        }
					    }
					});
					</script>";

		?>

			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>
