<?php

function plusGrand2(array $arg)
{
  if ($arg)
    return max($arg);
  else
    return null;
}

$array = array("lol", "ptdrrrrrrrr", "lool");
echo plusGrand2($array);
