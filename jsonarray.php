<?php
//string(62) "{"device":"ESP8266","sensorType":"DHT","temp":34.3,"hum":47.6}"
$obj = json_decode($_POST["pDataTopics"]);
print_r($obj->device);
print_r($obj->sensorType);
print_r($obj->temp);
print_r($obj->hum);
//print_r(time());
date_default_timezone_set('asia/jakarta');
echo date('l jS \of F Y h:i:s A');

$conn = mysqli_connect("127.0.0.1", "root", "root", "try");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (device, sensorType, temp, hum, waktu) VALUES ('$obj->device', '$obj->sensorType', '$obj->temp', '$obj->hum', " . time() . ")";

if (mysqli_query($conn, $sql)) {
    echo "berhasil";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>