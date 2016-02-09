<?php
$callback = function() {
  echo "Callback achieved.\n";
};

call_user_func($callback);
