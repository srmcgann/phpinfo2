<?php
chdir("../roadtrip/tracks");
echo shell_exec("unzip -P PW temp.zip") . "\n";
?>
