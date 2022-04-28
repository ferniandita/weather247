<?php
	/**
	* 
	*/
	class Model_weather extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		function get_weather($url)
		{
			$json = file_get_contents("$url");
			$d = json_decode($json);

			return $d;
		}
	}
	?>