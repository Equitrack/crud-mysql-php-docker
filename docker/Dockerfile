FROM debian:10

MAINTAINER Antonio Castellanos <castellanos_lap@protonmail.com>

WORKDIR /opt

RUN \
	apt update && \
	apt-get -y install apt-transport-https lsb-release ca-certificates curl && \
	curl -sSL -o /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg && \
	sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list' && \
	apt-get update && \
	apt-get -y install php7.4 && \
	apt-get -y install php7.4-mysql

ENTRYPOINT ["php"]
