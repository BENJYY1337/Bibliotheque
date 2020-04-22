<?php

function premierElementTableau(array $arg)
{
  if ($arg)
    return $arg[0];
  else
    return null;
}

$array = array();
echo premierElementTableau($array);
