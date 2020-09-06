#!/bin/bash
sudo ./buffer.sh
#if [ -f fichero2.txt ];
#then
#    rm fichero2.txt
#fi

sleep 4
$cont = 0
while IFS= read -r line;do
  for word in $line;do
     cont=$((cont+1))
     if [ $cont -gt 1 ];then
	var1=$(echo $word | tr '[:lower:]' '[:upper:]')
	#echo $var1
	echo "obase=10; ibase=16; $var1" | bc >> lecturaADC.txt
     fi
  done
  cont=$((cont-cont))
done < fichero1.txt

#while read number
#do
#echo "obase=10; ibase=16; $number" | bc >> lecturaADC.txt
#done < fichero2.txt
sudo python3 inserta.py $1
