<?php

function verificationPassword(string $argument)
{
  if (strlen($argument) > 7 && ctype_alnum($argument) && preg_match('/(?=.*[a-z])(?=.*[A-Z])/', $argument)) {
    return true;
  } else {
    return false;
  }
}
