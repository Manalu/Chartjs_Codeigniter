<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database Driven Charts Demo | Daniel Drave</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main/bootstrap.css" />
	<link rel="stylesheet" href="assets/css/main/datatable.css" />
	<link rel="stylesheet" href="assets/css/main/daterangepicker.css">
	<script src="assets/js/main/jquery-2.1.4.min.js"></script>
	<script src="assets/js/main/Chart.js"></script>
	<script src="assets/js/main/bootstrap.js"></script>
	<script language="javascript" type="text/javascript">
        $(document).ready(function() {
            setInterval("location.reload(true)", 3000000);
        });
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

	<div id="forms">
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-12 col-md-9">
				<canvas id="Onecanvas" width="256" height="256">
				</div>
					<div class="col-sm-12 col-md-9">
				<canvas id="Twocanvas" width="256" height="256">
</div>
						<div class="col-sm-12 col-md-9">
					<canvas id="Threecanvas" width="256" height="256">
</div>
							<div class="col-sm-12 col-md-9">
						<canvas id="Fourcanvas" width="256" height="256">
</div>
								<div class="col-sm-12 col-md-9">
							<canvas id="Fivecanvas" width="256" height="256">
</div>
									<div class="col-sm-12 col-md-9">
								<canvas id="Sixcanvas" width="256" height="256">
									<script>
							$(document).ready(function(){
								var one = $("#Onecanvas").get(0).getContext("2d");
								var two = $("#Twocanvas").get(0).getContext("2d");
								var three = $("#Threecanvas").get(0).getContext("2d");
								var four = $("#Fourcanvas").get(0).getContext("2d");
								var five = $("#Fivecanvas").get(0).getContext("2d");
								var six = $("#Sixcanvas").get(0).getContext("2d");

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
	    case 2:
	        $two[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
	        break;
	    case 3:
	        $three[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
	        break;
			case 4:
					$four[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
					break;
			case 5:
					$five[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
					break;
			case 6:
					$six[] = '{value: '.$th->Humedad.', '.changeData($th->Temperatura).' label: "Sensor'.$th->Sensores_id.'"},';
					break;
	    default:
	        echo "Your favorite color is neither red, blue, nor green!";
	    }

							}
							$fastOne = substr(implode(" ",$one), 0, -1);
							echo "var dataOne = [".$fastOne."]; \n";

							$fastTwo = substr(implode(" ",$two), 0, -1);
							echo "var dataTwo = [".$fastTwo."]; \n";

							$fastThree = substr(implode(" ",$three), 0, -1);
							echo "var dataThree = [".$fastThree."]; \n";

							$fastFour = substr(implode(" ",$four), 0, -1);
							echo "var dataFour = [".$fastFour."]; \n";

							$fastFive = substr(implode(" ",$five), 0, -1);
							echo "var dataFive = [".$fastFive."]; \n";

							$fastSix = substr(implode(" ",$six), 0, -1);
							echo "var dataSix = [".$fastSix."]; \n";

						?>

var piechartOne = new Chart(one).Pie(dataOne);
var piechartTwo = new Chart(two).Pie(dataTwo);
var piechartThree = new Chart(three).Pie(dataThree);
var piechartFour = new Chart(four).Pie(dataFour);
var piechartFive = new Chart(five).Pie(dataFive);
var piechartSix = new Chart(six).Pie(dataSix);

			});

</script>
	<!-- <input class="btn btn-success" type="submit" value="Compare" />
 </form> -->
			</div>
		</div>
	</div>

</div> <!--END OF WRAPPER-->

</body>
</html>
