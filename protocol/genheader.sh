#!/bin/bash

rm header.php;
echo "<?php" > genheader.tmp;

for file in `ls`
do
ext=${file##*.}
if [ $ext = "php" ];then
	echo "require_once '$file';" >> genheader.tmp;
fi
done
echo "?>" >> genheader.tmp;
mv genheader.tmp header.php



