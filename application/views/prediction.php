<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/weather.css')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="header">
		<div class="logo">
			<img src="<?php echo base_url('assets/images/weather247f.png')?>" height="70px">
		</div>
		<div class="nav">
			<ul class="menu">
				<li class="menu-item" id="home"><a href="#" id="link">Home</a></li>
			</ul>
		</div>
	</div>
	<center>
		<div class="card">
			<center>
				<h2><a>Weather Prediction</a></h2> </center>
				<div class="opsi">
					<select class="select">
						<option value="Five">5 Minutes</option>
						<option value="Fifteen">15 Minutes</option>
						<option value="Hourly">Hourly</option>
					</select>
				</div>
				<div class="Five graphic-content">
					<center>
						<table class="scores__table">
							<thead>
								<tr>
									<th>Day</th>
									<th>Date</th>
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<tr>
								<td>Selasa</td>
								<td>1 Maret 2018</td>
								<td>2:27</td>
								<td>30</td>
								<td>30</td>
								<td>30</td>
								<td>Sunny</td>
							</tr>
						</table>
					</center>
				</div>
				<div class="Fifteen graphic-content">
					<center>
						<table class="scores__table">
							<thead>
								<tr>
									<th>Day</th>
									<th>Date</th>
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<tr>
								<td>Selasa</td>
								<td>2 Maret 2018</td>
								<td>2:27</td>
								<td>30</td>
								<td>30</td>
								<td>30</td>
								<td>Sunny</td>
							</tr>
						</table>
					</center>
				</div>
				<div class="Hourly graphic-content">
					<center>
						<table class="scores__table">
							<thead>
								<tr>
									<th>Day</th>
									<th>Date</th>
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<tr>
								<td>Selasa</td>
								<td>3 Maret 2018</td>
								<td>2:27</td>
								<td>30</td>
								<td>30</td>
								<td>30</td>
								<td>Sunny</td>
							</tr>
						</table>
					</center>
				</div>
			</div>
		</center>
		<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
		<script src="<?php echo base_url('assets/js/jquery-templ.js')?>"></script>
		<script src="<?php echo base_url('assets/js/weather.js')?>"></script>
		<script src="<?php echo base_url('assets/js/cuaca.js')?>"></script>
	</body>
	</html>