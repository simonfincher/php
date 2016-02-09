<?php
$i = 0;
$j = 0;

while ($i < 10) {
  while ($j < 10) {
    if ($j == 5) {
      break 2; // Breaks out of two while loops.
    }
    $j++;
  }
  $i++;
}

echo "$i, $j\n";
