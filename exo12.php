<?php

function dernierElementTableau(array $arg)
{
  if ($arg)
    return end($arg);
  else
    return null;
}
$array = array("lol", "mdr", "ptdr");
echo dernierElementTableau($array);
