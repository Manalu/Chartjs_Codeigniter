<!DOCTYPE html>
<html lang="en">
<head>

 <title>Sensor Five</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script type="text/javascript">

$(function () {
var baseUrl = "<?php echo base_url();?>";
var sensorId = $('#sensorId').val();
	$("#amd").on('click', function () {
			$.post(baseUrl + "chart/getCharts/", {
					sensorId: $('#sensorId').val()
			}).done(function(data) {
        switch(data) {
    case "0":
        alert("Choose a sensor");
        break;
    case "1":
        window.location.replace("http://localhost:60/exponential/chart/sensorOne");
        break;
    case "2":
        window.location.replace("http://localhost:60/exponential/chart/sensorTwo");
        break;
    case "3":
        window.location.replace("http://localhost:60/exponential/chart/sensorThree");
        break;
    case "4":
        window.location.replace("http://localhost:60/exponential/chart/sensorFour");
        break;
    case "5":
        window.location.replace("http://localhost:60/exponential/chart/sensorFive");
        break;
    case "6":
        window.location.replace("http://localhost:60/exponential/chart/sensorSix");
        break;
    default:
        alert("Choose a sensor");
}
			});
	})

	});
</script>
 <style>
 body {
		 font: 400 15px Lato, sans-serif;
		 line-height: 1.8;
		 color: #818181;
 }
 h2 {
		 font-size: 24px;
		 text-transform: uppercase;
		 color: #303030;
		 font-weight: 600;
		 margin-bottom: 30px;
 }
 h4 {
		 font-size: 19px;
		 line-height: 1.375em;
		 color: #303030;
		 font-weight: 400;
		 margin-bottom: 30px;
 }
 .jumbotron {
		 background-color: #f41ec9;
		 color: #fff;
		 padding: 100px 25px;
		 font-family: Montserrat, sans-serif;
 }
 .container-fluid {
		 padding: 60px 50px;
 }
 .bg-grey {
		 background-color: #f6f6f6;
 }
 .logo-small {
		 color: #f41ec9;
		 font-size: 50px;
 }
 .logo {
		 color: #f41ec9;
		 font-size: 200px;
 }
 .thumbnail {
		 padding: 0 0 15px 0;
		 border: none;
		 border-radius: 0;
 }
 .thumbnail img {
		 width: 100%;
		 height: 100%;
		 margin-bottom: 10px;
 }
 .carousel-control.right, .carousel-control.left {
		 background-image: none;
		 color: #f41ec9;
 }
 .carousel-indicators li {
		 border-color: #f41ec9;
 }
 .carousel-indicators li.active {
		 background-color: #f41ec9;
 }
 .item h4 {
		 font-size: 19px;
		 line-height: 1.375em;
		 font-weight: 400;
		 font-style: italic;
		 margin: 70px 0;
 }
 .item span {
		 font-style: normal;
 }
 .panel {
		 border: 1px solid #f41ec9;
		 border-radius:0 !important;
		 transition: box-shadow 0.5s;
 }
 .panel:hover {
		 box-shadow: 5px 0px 40px rgba(0,0,0, .2);
 }
 .panel-footer .btn:hover {
		 border: 1px solid #f41ec9;
		 background-color: #fff !important;
		 color: #f41ec9;
 }
 .panel-heading {
		 color: #fff !important;
		 background-color: #f41ec9 !important;
		 padding: 25px;
		 border-bottom: 1px solid transparent;
		 border-top-left-radius: 0px;
		 border-top-right-radius: 0px;
		 border-bottom-left-radius: 0px;
		 border-bottom-right-radius: 0px;
 }
 .panel-footer {
		 background-color: white !important;
 }
 .panel-footer h3 {
		 font-size: 32px;
 }
 .panel-footer h4 {
		 color: #aaa;
		 font-size: 14px;
 }
 .panel-footer .btn {
		 margin: 15px 0;
		 background-color: #f41ec9;
		 color: #fff;
 }
 .navbar {
		 margin-bottom: 0;
		 background-color: #f41ec9;
		 z-index: 9999;
		 border: 0;
		 font-size: 12px !important;
		 line-height: 1.42857143 !important;
		 letter-spacing: 4px;
		 border-radius: 0;
		 font-family: Montserrat, sans-serif;
 }
 .navbar li a, .navbar .navbar-brand {
		 color: #fff !important;
 }
 .navbar-nav li a:hover, .navbar-nav li.active a {
		 color: #f41ec9 !important;
		 background-color: #fff !important;
 }
 .navbar-default .navbar-toggle {
		 border-color: transparent;
		 color: #fff !important;
 }
 footer .glyphicon {
		 font-size: 20px;
		 margin-bottom: 20px;
		 color: #f41ec9;
 }
 .slideanim {visibility:hidden;}
 .slide {
		 animation-name: slide;
		 -webkit-animation-name: slide;
		 animation-duration: 1s;
		 -webkit-animation-duration: 1s;
		 visibility: visible;
 }
 @keyframes slide {
	 0% {
		 opacity: 0;
		 transform: translateY(70%);
	 }
	 100% {
		 opacity: 1;
		 transform: translateY(0%);
	 }
 }
 @-webkit-keyframes slide {
	 0% {
		 opacity: 0;
		 -webkit-transform: translateY(70%);
	 }
	 100% {
		 opacity: 1;
		 -webkit-transform: translateY(0%);
	 }
 }
 @media screen and (max-width: 768px) {
	 .col-sm-4 {
		 text-align: center;
		 margin: 25px 0;
	 }
	 .btn-lg {
			 width: 100%;
			 margin-bottom: 35px;
	 }
 }
 @media screen and (max-width: 480px) {
	 .logo {
			 font-size: 150px;
	 }
 }
 </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- START -->



<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://localhost:60/exponential">Sensors</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">SELECT A SENSOR</a></li>

      </ul>
    </div>
  </div>
</nav>



<!-- Container (Portfolio Section) id="portfolio" -->
<br></br>
<div id="wrapper">
	<div class="container">
 <div class="row">
 <div class="col-sm-8" >
 <canvas id="myChart" width="60" height="40"></canvas>
 </div>
 </div>
 </div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>SELECT ONE OF THE SENSORS</h2><br>
      <br>
      <p></p>
      <br>
			<!-- <button class="btn btn-default btn-lg">Get in Touch</button> -->
			<select name="sensorId" id="sensorId" class="selectpicker">
				<option value="0">Select a sensor</option>
				<option value="1">Sensor 1</option>
				<option value="2">Sensor 2</option>
				<option value="3">Sensor 3</option>
				<option value="4">Sensor 4</option>
				<option value="5">Sensor 5</option>
				<option value="6">Sensor 6</option>
			</select>

<input id="amd" class="btn btn-primary" type="submit" value="Search" />
<a href="http://localhost:60/exponential/chart/showchart" class="btn btn-primary">Custom Reports</a>


    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">

</div>
<!-- ENDSTART -->






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
case 5:
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
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>@Copyrights <a href="http://localhost:60/exponential" title="Visit CODINGEC">CODINGEC</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
