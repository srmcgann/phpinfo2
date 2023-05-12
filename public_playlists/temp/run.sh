!/bin/bash
wget https://www.dropbox.com/s/jxxdqvyfjsbc7a3/temp.zip.001?raw=1 -O temp.zip.001
wget https://www.dropbox.com/s/07gzev10vtctk6g/temp.zip.002?raw=1 -O temp.zip.002
wget https://www.dropbox.com/s/p588lmnqxnyfp3f/temp.zip.003?raw=1 -O temp.zip.003
wget https://www.dropbox.com/s/3ys4t6jckwep3fo/temp.zip.004?raw=1 -O temp.zip.004
wget https://www.dropbox.com/s/wu0t9niyz8d178q/temp.zip.005?raw=1 -O temp.zip.005
cat temp.zip.001 > file.zip
cat temp.zip.002 >> file.zip
cat temp.zip.003 >> file.zip
cat temp.zip.004 >> file.zip
cat temp.zip.005 >> file.zip
zip -F file.zip
echo "PW" | unzip file.zip
rm -rf ../roadtrip/tracks
mv roadtrip-tracks ../roadtrip/tracks
