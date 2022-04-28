<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/weather.css')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/mqttws31.js');?>" type="text/javascript"></script>
</head>
<body onload="init();">
	<div class="header">
		<div class="logo">
			<img src="<?php echo base_url('assets/images/weather247f.png')?>" height="70px">
		</div>
	</div>
	<center>
		<div class="content">
			<div class="container">
				<div class="forecast-container">
					<div class="forecast-header">
						<h6 id="Weather" name='#'><?php echo $weathersnow[0]->day; ?>, <?php echo $datenow; ?></h6>
					</div>
					<div class="forecast-content">
						<center>
							<h4>Last Update: <?php echo $weathersnow[0]->time; ?></h4>
							<img src="<?php echo $weathers[0]->images; ?>" height="150px">
							<h3><?php echo $weathersnow[0]->weather; ?></h3>
							<br><br><br><br>
							<table style="font-size: 20px;">
								<tr>
									<td><img src="<?php echo base_url('assets/images/termometer-black.png') ?>" height="40px"></td>
									<td width="70px"><span class="count"><?php echo $weathersnow[0]->temperature; ?> </span><sup>o</sup>C</td>
									<td><img src="<?php echo base_url('assets/images/kelembaban-black.png') ?>" height="40px"></td>
									<td width="60px"><span class="count"><?php echo $weathersnow[0]->humidity; ?></span>%</td>
									<td><img src="<?php echo base_url('assets/images/tekanan-udara-black.png') ?>" height="40px"></td>
									<td width="60px"><span class="count"><?php echo $weathersnow[0]->pressure; ?></span>Pa</td>
								</tr>
								<tr>
									<td height="45x"></td>
								</tr>
								<tr>
									<td id="Prediction" height="45x"></td>
								</tr>
							</table>
						</center>			
					</div>
				</div>
				<div class="graphic-container">
					<div class="graphic-header">
						<h6 id="Weather">Real Time Graph</h6>
					</div>
					<div class="opsi">
						<select class="select">
							<option value="Temperature">Temperature</option>
							<option value="Humidity">Humidity</option>
							<option value="Pressure">Air Pressure</option>
						</select>
					</div>
					<div class="Temperature graphic-content">
						<div id="suhu"></div>
					</div>
					<div class="Humidity graphic-content">
	
					</div>
					<div class="Pressure graphic-content">
						
					</div>
				</div>
			</div>
			<div class="weekly">

				<?php foreach ($weathers as $weather) : ?>
					<div class="first-weekly">
						<div class="first-header">
							<h8 id="Weather" "name='#'> <a href="<?php echo base_url("Weather/details?date=$weather->date") ?>"> <?php echo $weather->day; ?> </a> </h8>
							<p id="Weather" style="font-size:18px;"name='#'><?php echo $weather->date_reformated;?> </p>
						</div>
						<div class="first-content">
							<center>
								<img src="<?php echo $weather->images; ?>" height="85px" style="margin-top: 40px;">
								<table style="font-size: 15px;">
									<tr>
										<td><img src="<?php echo base_url('assets/images/termometer-black.png') ?>" height="20px"></td>
										<td width="50px"><span class="count"><?php echo $weather->temperature; ?> </span><sup>o</sup>C</td>
									</tr>
								</table>
								<h3><?php echo $weather->weather; ?></h3>

								<table style="font-size: 15px;">
									<tr>
										<td><img src="<?php echo base_url('assets/images/kelembaban-black.png') ?>" height="20px"></td>
										<td width="40px"><span class="count"><?php echo $weather->humidity; ?></span>%</td>
										<td><img src="<?php echo base_url('assets/images/tekanan-udara-black.png') ?>" height="20px"></td>
										<td width="40px"><span class="count"><?php echo $weather->pressure; ?></span>Pa</td>
									</tr>
									<tr>
										<td height="45x"></td>
									</tr>
									<tr>
										<td id="Prediction" height="45x"></td>
									</tr>
								</table>
							</center>      
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</center>
	<script src="<?php echo base_url('assets/js/highstock.js');?>"></script>
	<script src="<?php echo base_url('assets/js/exporting.js');?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-ui.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/jquery-templ.js')?>"></script>
	<script src="<?php echo base_url('assets/js/cuaca.js')?>"></script>
</body>
</html>