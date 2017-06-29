#!/usr/bin/env bash

git submodule update --init --recursive
git submodule update --remote

cp ./laradock/wordpress/wp-config.php ./wordpress/

cd laradock
docker-compose up