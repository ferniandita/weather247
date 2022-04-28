<!DOCTYPE html>
<html>
<head>
	<title>Weather</title>
</head>
<body>
	<table border=2px>
		<tr>
			<td> ID </td>
			<td> Weather </td>
			<td> Day </td>
			<td> Date </td>
			<td> Temperature </td>
			<td> Pressure </td>
			<td> Humidity </td>			
		</tr>


		<?php foreach ($weathers as $weather): ?>
			<tr>
				<td> <?php echo $weather->id; ?> </td>
				<td> <?php echo $weather->weather; ?> </td>
				<td> <?php echo $weather->day; ?> </td>
				<td> <?php echo $weather->date; ?> </td>
				<td> <?php echo $weather->temperature; ?> </td>
				<td> <?php echo $weather->pressure; ?> </td>
				<td> <?php echo $weather->humidity; ?> </td>
			</tr>
		<?php endforeach; ?>


	</table>
</body>
</html>