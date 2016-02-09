<?php
function update_counter() {
  $counter++;
}

$counter = 10;
update_counter();

echo $counter;
