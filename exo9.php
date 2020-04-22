<?php

function plusGrand(int $arg1, int $arg2)
{
  if ($arg1 > $arg2) {
    return $arg1;
  } else if ($arg1 < $arg2)
    return $arg2;
}
echo plusGrand(40, 20);
