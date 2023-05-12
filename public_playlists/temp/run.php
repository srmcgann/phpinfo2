<?php
  chdir("../roadtrip/tracks");
  echo shell_exec("unzip -P PW temp.zip") . "\n";
  echo shell_exec("chmod 777 . -R") . "\n";
?>
