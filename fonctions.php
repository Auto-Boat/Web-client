<?php
function callComponent(string $name): void
{
  include('components/' . $name . '.php');
}

function writeJSON($data)
{
  $json_centent = json_encode($data);
  $myfile = fopen("example.json", "w");
  fwrite($myfile, $json_centent);
  fclose($myfile);
}

function createTab(float $temperature, float $pressure, float $humidity, float $latitude, float $longitude)
{
  $tab = array("temperature" => $temperature, "pressure" => $pressure, "humidity" => $humidity, "latitude" => $latitude, "longitude" => $longitude);
  return $tab;
}

function printData()
{
  echo "<script src='./printDataScript.js'></script>";
}

function updateData(float $temperature, float $pressure, float $humidity, float $latitude, float $longitude)
{
  $tab = createTab($temperature, $pressure, $humidity, $latitude, $longitude);
  writeJSON($tab);
  printData();
}
