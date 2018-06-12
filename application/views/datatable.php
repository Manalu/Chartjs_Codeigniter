<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>REPORT</title>
	<link rel="stylesheet" type="text/css" href="../assets/private/private/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../assets/private/private/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../assets/private/private/datatables/dataTables.bootstrap4.css">
	<link rel="stylesheet" href="../assets/private/css/sb-admin.css">
	<link rel="stylesheet" href="../assets/css/main/datetimepicker.css">
	<script src="../assets/private/private/jquery/jquery.min.js"></script>
	<script src="../assets/js/main/datetimepicker.js"></script>
	<script src="../assets/js/dates.js"></script>
	<style>


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


  </style>
</head>

<body>
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

	<br></br>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i>
								<form method="post" action="../chart/showchart">
								<div class="col-sm-12 col-md-9">

								<label class="control-label col-sm-4" for="price">From:
									<input type="text" name="yearOne" id="startDate" class="form-control form-control-sm" placeholder="" aria-controls="example">
								</label>



								<label class="control-label col-sm-4" for="price">To:
									<input type="text" name="yearTwo" id="stopDate" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>

									<!-- <label class="control-label col-sm-4" for="price"> Sensor:
										<select  name="sensorId" class="selectpicker" data-style="btn-success">
										<option value="0"selected>Escoger sensor</option>
									  <option value="1">Sensor 1</option>
									  <option value="2">Sensor 2</option>
									  <option value="3">Sensor 3</option>
										<option value="4">Sensor 4</option>
										<option value="5">Sensor 5</option>
										<option value="6">Sensor 6</option>
									</select></label> -->

								</div>
								<input class="btn btn-primary" type="submit" value="Search" />
							</div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sensor Id</th>
                            <th>Date time</th>
                            <th>Temperature</th>
                            <th>Humidity</th>
														<th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
													<th>Sensor Id</th>
													<th>Date time</th>
													<th>Temperature</th>
													<th>Humidity</th>
													<th>Status</th>
                        </tr>
                        </tfoot>

                        <tbody>


                        </tr>
												<?php
												function getStatus($transform){
												 if ($transform <= 15) {
														 return '<button type="button" class="btn btn-info">Frio</button>';
												 } elseif ($transform >= 16 && $transform <= 30) {
														 return '<button type="button" class="btn btn-success">Bien</button>';
												 }elseif ($transform >= 31) {
														 return '<button type="button" class="btn btn-danger">Peligro</button>';
												 }else{
														 return '<button type="button" class="btn btn-warning">Erros</button>';
												 }
												}
												foreach ($data as $th) {
													echo "<tr>
	                            <td>".$th->Sensores_id."</td>
															<td>".$th->Fecha."</td>
															<td>".$th->Temperatura."</td>
															<td>".$th->Humedad."</td>
															<td>".getStatus($th->Temperatura)."</td>";
												}

												?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated
							<?php
								echo  date('Y-m-d  h:i a');
						 ?></div>
        </div>

				<footer class="container-fluid text-center">
				  <a href="#myPage" title="To Top">
				    <span class="glyphicon glyphicon-chevron-up"></span>
				  </a>
				  <p>@Copyrights <a href="http://localhost:60/exponential/" title="Visit CODINGEC">CODINGEC </a></p>
				</footer>
				<script src="../assets/private/private/bootstrap/js/bootstrap.bundle.min.js"></script>
				<script src="../assets/private/private/chart.js/Chart.min.js"></script>
				<script src="../assets/private/private/datatables/jquery.dataTables.min.js"></script>
				<script src="../assets/private/private/datatables/dataTables.bootstrap4.js"></script>
				<script src="../assets/private/js/reports/sb-admin-datatables.js"></script>
				<script src="../assets/private/js/charts/sb-admin-charts.js"></script>


</body>



</html>
