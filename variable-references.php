<?php
$big_long_variable_name = "PHP";
$short =& $big_long_variable_name;
$big_long_variable_name .= " rocks!";
print "\$short is $short\n";
print "Long is $big_long_variable_name\n";

$short = "Programming $short";
print "\$short is $short\n";
print "Long is $big_long_variable_name\n";

function &retRef() {
  $var = "PHP";

  return $var;
}

$v =& retRef();
echo "$v\n";
