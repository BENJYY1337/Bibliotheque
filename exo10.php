<?php

function plusPetit(int $arg1, int $arg2)
{
  if ($arg1 < $arg2) {
    return $arg1;
  } else if ($arg1 > $arg2)
    return $arg2;
}
echo plusPetit(40, 70);
