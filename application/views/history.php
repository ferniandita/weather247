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
				
			</ul>
		</div>
	</div>
	<center>
		<div class="card">
			<center>
				<h2><a>Weather Data</a></h2>
				<h3><?php echo $weathershourly[0]->day; ?>, <?php echo $date_reformated; ?></h3>
			</center>
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
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<?php foreach ($predictionfive as $five) : ?>
								<tr>
								<td class="prediction"><?php echo $five->time; ?></td>
								<td class="prediction"><?php echo $five->temperature; ?></td>
								<td class="prediction"><?php echo $five->humidity; ?></td> 
								<td class="prediction"><?php echo $five->pressure; ?></td>
								<td class="prediction"><?php echo $five->weather; ?></td>
							</tr>
							<?php endforeach; ?>
							<?php foreach ($historyfive as $five) : ?>
							<tr>
								<td><?php echo $five->time; ?></td>
								<td><?php echo $five->temperature; ?></td>
								<td><?php echo $five->humidity; ?></td>
								<td><?php echo $five->pressure; ?></td>
								<td><?php echo $five->weather; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
					</center>
				</div>
				<div class="Fifteen graphic-content">
					<center>
						<table class="scores__table">
							<thead>
								<tr>
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<?php foreach ($predictionfifteen as $fifteen) : ?>
								<tr>
								<td class="prediction"><?php echo $fifteen->time; ?></td>
								<td class="prediction"><?php echo $fifteen->temperature; ?></td>
								<td class="prediction"><?php echo $fifteen->humidity; ?></td> 
								<td class="prediction"><?php echo $fifteen->pressure; ?></td>
								<td class="prediction"><?php echo $fifteen->weather; ?></td>
							</tr>
							<?php endforeach; ?>
							<?php foreach ($historyfifteen as $fifteen) : ?>
							<tr>
								<td><?php echo $fifteen->time; ?></td>
								<td><?php echo $fifteen->temperature; ?></td>
								<td><?php echo $fifteen->humidity; ?></td>
								<td><?php echo $fifteen->pressure; ?></td>
								<td><?php echo $fifteen->weather; ?></td>
							</tr>
							<?php endforeach; ?>
						</table>
					</center>
				</div>
				<div class="Hourly graphic-content">
					<center>
						<table class="scores__table">
							<thead>
								<tr>
									<th>Time</th>
									<th>Temperature</th>
									<th>Humidity</th>
									<th>Air Pressure</th>
									<th>Weather</th>
								</tr>
							</thead>
							<?php foreach ($predictionhourly as $hourly) : ?>
								<tr>
								<td class="prediction"><?php echo $hourly->time; ?></td>
								<td class="prediction"><?php echo $hourly->temperature; ?></td>
								<td class="prediction"><?php echo $hourly->humidity; ?></td> 
								<td class="prediction"><?php echo $hourly->pressure; ?></td>
								<td class="prediction"><?php echo $hourly->weather; ?></td>
							</tr>
							<?php endforeach; ?>
							<?php foreach ($historyhourly as $hourly) : ?>
							<tr>
								<td><?php echo $hourly->time; ?></td>
								<td><?php echo $hourly->temperature; ?></td>
								<td><?php echo $hourly->humidity; ?></td> 
								<td><?php echo $hourly->pressure; ?></td>
								<td><?php echo $hourly->weather; ?></td>
							</tr>
						<?php endforeach; ?>
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