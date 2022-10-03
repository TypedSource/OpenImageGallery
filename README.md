# OpenImageGallery

## Dependencies
- php8.1
- composer
- symfony-cli (recommended)

Stages
- Master (branch main)
- Testing (branch test)
- Development (branch develop)

## Install

- copy the docker-compose.dist.yml to docker-compose.yml and edit with your credentials
- start the docker containers `docker compose up -d`
- clone the repository and run `composer install` to get the required packages
- browse to the web page `http://localhost:8080`
