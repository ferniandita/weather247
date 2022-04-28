
model : model_weather.php
view : home.php, history.php, error.php
controller : Weather.php

set url :
path : weather247/application/controllers/Weather.php

public function index()
{
	$urlnow = "set_url_for_data_weather_now";

	$url = "set_url_for_data_a_week";

...



public function details() {

		$date = $this->input->get('date');

		$urlhourly = "set_url_for_load_data_hourly";

		$urlfifteen = "set_url_for_load_data_15_minutes";

		$urlfive = "set_url_for_load_data_5_minutes";
...




