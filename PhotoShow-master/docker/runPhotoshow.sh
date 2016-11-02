#!/bin/bash

which docker
if [ $? -ne 0 ]; then
	echo 'You need to install docker !'
	exit 1
fi

help() {
	echo $0" build and run a PhotoShow docker container"
	echo "Usage: "$0" [forcebuild|help]"
	exit 0
}

readParam() {
	if [ $# -ne 1 ] || [ "$1" == 'help' ]; then
		help
	fi

	if [ "$1" == 'forcebuild' ]; then
		dockerOpt="--no-cache"
	fi
}

dockerImageName='photoshow'
dockerContainerName='photoshow-demo'
dockerOpt=""

if [ $# -ne 0 ]; then
	readParam $*
fi

dockerDir=`dirname $0`
pushd ${dockerDir}

if [ ! -e photoshow.key ] || [ ! -e photoshow.key.pub ]; then
	ssh-keygen -t rsa -b 4096 -P '' -f photoshow.key
fi

docker build ${dockerOpt} -t ${dockerImageName} .

if [ $? -ne 0 ]; then
	echo 'Fail to build Photoshow container...'
	exit 1
fi

docker stop ${dockerContainerName}
sleep 5
docker rm ${dockerContainerName}
docker run --name ${dockerContainerName} -p 8080:80 -p 2222:22 -d -i -t ${dockerImageName}

if [ $# -eq 0 ]; then
    clear
    echo 'PhotoShow is running ! To stop it run: docker stop '${dockerContainerName}
    echo 'Connect to http://localhost:8080/'
    echo "SSH: ssh -i ${dockerDir}/photoshow.key -p 2222 root@localhost"
else
    echo 'PhotoShow fail to start'
fi
