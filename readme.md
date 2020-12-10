## summary

This docker image is for a web server which shows the global ip address of the web client.
You can put it behind a reverse proxy.

## build

You can pull the image from docker hub.

	docker pull mnod/docker-ipcheck

Of course you can build your own docker image.

	docker build -t ipcheck:latest .

## run

Please specify port number as you like.

	docker run -d --rm -p <localport>:80 ipcheck:latest

## how to access

You can show global ip address of the web client in simple text

	curl -s -L <server address>:<localport>

You can show global ip address and hostname in json format

	curl -s -L <server address>:<localport>/ipcheck.php

The response will be like below

	{"ipaddress":"xxx.xxx.xxx.xxx","hostname":"xxx.xxx.xxx.xxx"}
