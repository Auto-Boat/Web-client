<?php
$statusList = array("battery", "network", "modules");
$dataList = array("pH", "temperature", "weather");
include_once("fonctions.php");
?>

<div class="left-menu">
  <img id="img_kayak" src="assets/images/kayak.png" alt="Image de notre kayak">
  <h1>Auto Boat</h1>
  <div class="data-list">
    <h2>System status</h2>
    <!-- Appelle tous les components php dont le nom est dans la statusList -->
    <?php foreach ($statusList as $status) : ?>
      <div class="data-container">
        <?php callComponent($status) ?>
      </div>
    <?php endforeach; ?>
    <h2>Data</h2>
    <!-- Appelle tous les components php dont le nom est dans la dataList -->
    <?php foreach ($dataList as $data) : ?>
      <div class="data-container">
        <?php callComponent($data) ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>