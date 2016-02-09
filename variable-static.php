<?php
function update_counter() {
  static $counter = 0;
  $counter++;

  echo "Static counter is $counter\n";
}

$counter = 10;
update_counter();
update_counter();

echo "Global counter is $counter\n";
