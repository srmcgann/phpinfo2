<?php
  chdir("../roadtrip/tracks");
  echo shell_exec("rm temp.zip 2>&1");

  echo shell_exec("wget https://www.dropbox.com/s/6qlblrt0dic49bw/tracks.zip?dl=0 -O temp.zip &");
  //echo shell_exec("wget https://www.dropbox.com/s/07gzev10vtctk6g/temp.zip.002?raw=1 -O temp.zip.002 2>&1");
  //echo shell_exec("wget https://www.dropbox.com/s/p588lmnqxnyfp3f/temp.zip.003?raw=1 -O temp.zip.003 2>&1");
  //echo shell_exec("wget https://www.dropbox.com/s/3ys4t6jckwep3fo/temp.zip.004?raw=1 -O temp.zip.004 2>&1");
  //echo shell_exec("wget https://www.dropbox.com/s/wu0t9niyz8d178q/temp.zip.005?raw=1 -O temp.zip.005 2>&1");
  echo "<br>done downloading files.<br>";
  //echo shell_exec("cat temp.zip* >> temp.zip 2>&1");
  //echo "<br>finished concatenating archive parts.<br>";
  echo shell_exec("unzip -P PW temp.zip & 2>&1") . "<br>";
  echo shell_exec("chmod 777 . -R 2>&1") . "<br>";
  echo shell_exec("mv roadtrip-tracks/* .") . "<br>";
  echo shell_exec("ls") . "<br>";
  echo "<br>finished expaning archive.<br>";
?>
