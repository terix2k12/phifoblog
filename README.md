# Phifo Blog

This is a lightweight open-source PHP blog.

It is a small hobby project to power my blog on https://www.philippfonteyn.de 

## Why a new PHP blog?

There are already very powerful PHP blogs out there. I created this one because I do programming for fun and to learn a little bit about PHP, CSS and web-projects in general.

# Installation

Fully automated installation not yet supported. Currently three steps are necessary:
- copy the whole project onto your webspace
- create a SQL database with the tables LOGINREGISTER and ARTICLES 
- Edit the dbcredentials.php

# Development

git checkout
cd docker
docker-compose up

## Database

connect with a sql tool e.g. DBeaver
to localhost/9906

## Tests

is usingPHPunit
./phpunit --bootstrap src/autoload.php tests

./phpunit --version
./phpunit tests
 sudo docker exec docker_blog-api_1 /phptest/phpunit /phptest/test

# TODO
test dbvolumes...
 i don't want to use a docker volume. I want to use a mount bind.
 https://docs.docker.com/storage/volumes/#use-a-volume-driver

content
// TODO select only specific content based on filters (date, categories, range etc.)

swagger api

 ## migrating....
 - welche funktionen sind da?
    [ ] alle funktionen gechecked