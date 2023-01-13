<?php

include("flag.php");

$code = $_GET['code'];
if (';' === preg_replace('/[a-z]+\((?R)?\)/', NULL, $code)) {
  if (preg_match('/et|na|nt|strlen|info|path|rand|dec|bin|hex|oct|pi|exp|log/i', $code)) {
    echo "$flag";
      } else {
	eval($code);
      }
}
