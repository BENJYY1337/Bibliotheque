<?php

function remplacerLesLettres(string $arg)
{
  $result = str_replace(['e', 'o', 'i'], [3, 0, 1], $arg);
  return $result;
}
