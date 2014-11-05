
while true
do
	sleep 1
	if [ -f command/scan ]
	then
		echo "scan"
		NAME=$(cat command/name)
		if [ ! -d image/$NAME ]
		then
			mkdir image/$NAME
		fi
		NBR=$(cat command/number)
		X=$(cat command/x)
		Y=$(cat command/y)
		RES=$(cat command/resolution)
		scanimage -L
		scanimage -p -x $X -y $Y --resolution $RES >image/$NAME/$NBR.pnm
		convert image/$NAME/$NBR.pnm image/$NAME/$NBR.jpg
		#chmod 777 image/$(cat command/name).pnm
		rm -f command/scan
	else
		echo "nothing to do"
	fi
done

