<?php
function callComponent(string $name): void
{
  include('components/' . $name . '.php');
}
