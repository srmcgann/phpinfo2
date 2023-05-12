<?php
  chdir("../roadtrip/tracks");
  echo shell_exec("rm temp.zip");

  echo shell_exec("wget https://www.dropbox.com/s/jxxdqvyfjsbc7a3/temp.zip.001?raw=1 -O temp.zip.001");
  echo shell_exec("wget https://www.dropbox.com/s/07gzev10vtctk6g/temp.zip.002?raw=1 -O temp.zip.002");
  echo shell_exec("wget https://www.dropbox.com/s/p588lmnqxnyfp3f/temp.zip.003?raw=1 -O temp.zip.003");
  echo shell_exec("wget https://www.dropbox.com/s/3ys4t6jckwep3fo/temp.zip.004?raw=1 -O temp.zip.004");
  echo shell_exec("wget https://www.dropbox.com/s/wu0t9niyz8d178q/temp.zip.005?raw=1 -O temp.zip.005");
  echo "done downloading files.\n";
  echo shell_exec("cat temp.zip* > temp.zip");
  echo "finished concatenating archive parts.\n";
  echo shell_exec("screen -d -m unzip -P PW temp.zip") . "\n";
  echo shell_exec("chmod 777 . -R") . "\n";
  echo "finished expaning archive.\n";
?>
