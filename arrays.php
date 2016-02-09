<?php

$person = array("Edison", "Wankel", "Crapper");

$creator = array(
  'lightbulb' => "Edison",
  'Rotary engine' => "Wankel",
  'Toilet' => "Crapper",);

foreach ($person as $name) {
  echo "Hello, $name\n";
}

echo "$person[0]\n";

foreach ($creator as $invention => $inventor) {
  echo "$inventor created the $invention\n";
}

foreach ($creator as $invention => $inventor) {
  echo "$inventor\n";
}

sort($person);

foreach ($person as $name) {
  echo "Hello, $name\n";
}

asort($creator);

foreach ($creator as $invention => $inventor) {
  echo "$inventor created the $invention\n";
}

if (is_array($person)) {
  echo "person is an array.\n";
}
