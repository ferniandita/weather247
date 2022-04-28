<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weather extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_weather');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		//this is url for load data weather now
		$urlnow = "https://noeldenis1997.000webhostapp.com/weather247/api/weather_detail.php";

		//this is url for load data weather for a week
		$url = "https://noeldenis1997.000webhostapp.com/weather247/api/weather.php";
		
		try {

			$data['weathers'] = $this->model_weather->get_weather($url)->data;
			$data['weathersnow'] = $this->model_weather->get_weather($urlnow)->data;

			//checking not an empty data
			if (is_null($data['weathers'])) {
				$this->load->view('error');
			}
			else {
				$data['datenow'] = new DateTime($weathersnow[0]->date);
				$data['datenow'] = $data['datenow']->format('d F Y');
				foreach ($data['weathers'] as $weather) {

					//change icon
					if ($weather->weather === 'Cloudy') {
						$weather->images = base_url('assets/images/cloudy.gif');
					}

					else if ($weather->weather === 'Rainy') {
						$weather->images = base_url('assets/images/rainy.gif');
					}

					else if ($weather->weather === 'Sunny') {
						$weather->images = base_url('assets/images/sunny.gif');
					}

					//change date format data weather for a week
					$weather->date_reformated = new DateTime ($weather->date);
					$weather->date_reformated = $weather->date_reformated->format('d F Y');

				}

				foreach ($data['weathersnow'] as $weather) {
					//change icon
					if ($weather->weather === 'Cloudy') {
						$weather->images = base_url('assets/images/cloudy.gif');
					}

					else if ($weather->weather === 'Rainy') {
						$weather->images = base_url('assets/images/rainy.gif');
					}

					else if ($weather->weather === 'Sunny') {
						$weather->images = base_url('assets/images/sunny.gif');
					}

					//change date format for data now
					$weather->date_reformated = new DateTime ($weather->date);
					$weather->date_reformated = $weather->date_reformated->format('d F Y');

				}

				//load home
				$this->load->view('home', $data);
			}
		}

		//load error 
		catch (Exception $e) {
			$this->load->view('error');

		}

	}

	public function details() {

		//get date from home
		$date = $this->input->get('date');

		//this url for load data weathers hourly
		$urlhourly = "https://noeldenis1997.000webhostapp.com/weather247/api/weather_detail.php?date=$date&duration=60";

		//this url for load data weathers each 15 minutes
		$urlfifteen = "https://noeldenis1997.000webhostapp.com/weather247/api/weather_detail.php?date=$date&duration=15";

		//this url for load data weathers each 5 minutes
		$urlfive = "https://noeldenis1997.000webhostapp.com/weather247/api/weather_detail.php?date=$date&duration=5";
		
		//change date format
		$data['date_reformated'] = new DateTime($date);
		$data['date_reformated'] = $data['date_reformated']->format('d F Y');

		//load url
		$data['weathershourly'] = $this->model_weather->get_weather($urlhourly)->data;
		$data['weathersfifteen'] = $this->model_weather->get_weather($urlfifteen)->data;
		$data['weathersfive'] = $this->model_weather->get_weather($urlfive)->data;

		//set time
		date_default_timezone_set('Asia/Jakarta');
		$nowtime = date('H:i');
		$nowdate = date_create(date('Y-m-d'));

		//set array for prediction and history hourly
		$data['predictionhourly'] = array();
		$data['historyhourly'] = array();

		//set array for prediction and history 5 minutes
		$data['predictionfifteen'] = array();
		$data['historyfifteen'] = array();

		//set array for prediction and history 5 minutes
		$data['predictionfive'] = array();
		$data['historyfive'] = array();

		foreach ($data['weathershourly'] as $hourlys) {
			$date = date_create($hourlys->date);
			$diff = date_diff($nowdate, $date);
			
			if($diff->format("%R") === "+" & $diff->format("%a") !== "0" ) {
				array_push($data['predictionhourly'], $hourlys);
			}
			else if($diff->format("%R") === "-" & $diff->format("%a") !== "0" ) {
				array_push($data['historyhourly'], $hourlys);
			}
			else {
				if (($nowtime-$hourlys->time)<0.0) {
					array_push($data['predictionhourly'], $hourlys);
				} else {
					array_push($data['historyhourly'], $hourlys);
				}
			}
		}

		foreach ($data['weathersfifteen'] as $hourlys) {
			$date = date_create($hourlys->date);
			$diff = date_diff($nowdate, $date);

			if($diff->format("%R") === "+" & $diff->format("%a") !== "0" ) {
				array_push($data['predictionfifteen'], $hourlys);
			}
			else if($diff->format("%R") === "-" & $diff->format("%a") !== "0" ) {
				array_push($data['historyfifteen'], $hourlys);
			}
			else {
				if (($nowtime-$hourlys->time)<0.0) {
					array_push($data['predictionfifteen'], $hourlys);
				} else {
					array_push($data['historyfifteen'], $hourlys);
				}
			}
		}

		foreach ($data['weathersfive'] as $hourlys) {
			$date = date_create($hourlys->date);
			$diff = date_diff($nowdate, $date);

			if($diff->format("%R") === "+" & $diff->format("%a") !== "0" ) {
				array_push($data['predictionfive'], $hourlys);
			}
			else if($diff->format("%R") === "-" & $diff->format("%a") !== "0" ) {
				array_push($data['historyfive'], $hourlys);
			}
			else {
				if (($nowtime-$hourlys->time)<0.0) {
					array_push($data['predictionfive'], $hourlys);
				} else {
					array_push($data['historyfive'], $hourlys);
				}
			}
		}
		$this->load->view('history', $data);
	}
}
