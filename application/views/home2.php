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
				<li class="menu-item" id="home"><a href="#">Home</a></li>
				<li class="menu-item"><a href="#Prediction">Prediction</a></li>
				<li class="menu-item"><a href="#History">History</a></li>
			</ul>
		</div>
	</div>
	<div class="content">
		<center>
			<div class="card">
				<center>
					<h2><a>Weather Prediction</a></h2>
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
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
							<tr>
								<td>Friday</td>
								<td>29-12-2017</td>
								<td>12:34</td>
								<td>30 <sup>o</sup>C</td>
								<td>30 %</td>
								<td>30 Pa</td>
								<td>Cloudy</td>
							</tr>
						</table>
					</center>
				</center>
			</div>
			<div class="card">
				<h2><a id="History">Weather History</a></h2>
				<table class="scores__table">
					<thead>
						<tr>
							<th>Day</th>
							<th>Date</th>
							<!--<th>Time</th>-->
							<th>Temperature</th>
							<th>Humidity</th>
							<th>Air Pressure</th>
							<th>Weather</th>
						</tr>
					</thead>
					
					<?php foreach ($weathers as $weather): ?>
						<tr>

							<td> <?php echo $weather->day; ?> </td>
							<td> <?php echo $weather->date; ?> </td>
							<td> <?php echo $weather->temperature; ?> <sup>o</sup>C </td>
							<td> <?php echo $weather->pressure; ?> </td>
							<td> <?php echo $weather->humidity; ?> </td>
							<td> <?php echo $weather->weather; ?> </td>
						</tr>
					<?php endforeach; ?>

				</table>
			</div>
		</center>
	</div>
</body>
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/weather.js')?>"></script>
</html>