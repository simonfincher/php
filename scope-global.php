<?php
function update_counter() {
  global $_counter;
  $_counter++;
}

$_counter = 10;
update_counter();

echo "$_counter\n";

function update_counter_global_array() {
  $GLOBALS[_counter_global]++;
}

$_counter_global = 10;
update_counter_global_array();
echo "$_counter_global\n";
