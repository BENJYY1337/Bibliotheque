<?php

function plusPetit2(array $arg)
{
  if ($arg)
    return min($arg);
  else
    return null;
}

$array = array("a", "pogfjkizqaiunjf", "l");
echo plusPetit2($array);
