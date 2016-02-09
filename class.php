<?php

class Person
{

  public $first = '';

  function first($newfirst = NULL) {

    if (!is_null($newfirst)) {
      $this->first = $newfirst;
    }

    return $this->first;
  }

  public $name = '';

  function name($newname = NULL) {

    if (!is_null($newname)) {
      $this->name = $newname;
    }

    return $this->name;
  }
}

$ed = new Person();
$ed->name('Edison');
echo "Hello, $ed->name\n";

$tc = new Person();
$tc->first('Thomas');
echo "Look out below, $tc->first\n";

if (is_object($tc)) {
  echo "tc is an object\n";
}
