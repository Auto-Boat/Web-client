<?php
include_once('fonctions.php');
?>

<div class="right-menu">
  <?php callComponent('map'); ?>
  <div class="coordonnees-container">
    <?php callComponent('latitude'); ?>
    <?php callComponent('longitude'); ?>
  </div>
</div>