<?php

function estIlMajeur(int $age)
{
  if ($age >= 18) {
    return true;
  } else {
    return false;
  }
}

echo estIlMajeur(19);
