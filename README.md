# Laravel with mongodb docker

## Installation

1. Install [docker](https://docs.docker.com/engine/installation/) and [docker-compose](https://docs.docker.com/compose/install/)
2. Copy ```.env.example``` to ```.env```
3. Run `docker-compose up -d`
4. Run `docker ps` to see all the running container

## Important Command After Installation/Git pull

```bash
docker-compose exec app composer install

```
# Run project

5. Go to ```http://localhost:8080/items``` in browser.
