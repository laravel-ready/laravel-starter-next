# 🏗️ Containers

While working or developing with this starter, you can use the following containers:

---

- [🏗️ Containers](#️-containers)
  - [🔸 PHP Containers](#-php-containers)
  - [🔸 DB Containers](#-db-containers)
  - [🔸 Redis Container](#-redis-container)
  - [🔸 Docker Compose](#-docker-compose)

## 🔸 PHP Containers

In this starter template, we use the [ServerSideUP](https://serversideup.net/)'s **[serversideup/php](https://serversideup.net/open-source/docker-php/)** container as base PHP container. You can modify the container configuration in the Dockerfiles if needed (e.g. adding extensions, removing Node.js setup etc.).

> {info} Default docker files: `.docker/local/Dockerfile`, `.docker/production/Dockerfile`

If you want modify the **serversideup/php** configs you can check the **[serversideup/php](https://github.com/serversideup/docker-php)** repository and **[official docs](https://serversideup.net/open-source/docker-php/docs)**.

## 🔸 DB Containers

By default we are using official [PostgreSQL](https://www.postgresql.org/) as database. You can modify the container configuration in the docker-compose files or remove the db service if you don't need it. Also check the `.docker/[dev|prod]/database/postgres/docker-entrypoint-initdb` folder for default database initialization scripts, extension setups etc.

> {info} Default database volumes are located in `.docker/[dev|prod]/volumes/dev_postgres_data` folders.

## 🔸 Redis Container

By default we are using official [Redis](https://redis.io/) as cache and session driver. You can modify the container configuration in the docker-compose files or remove the redis service if you don't need it.

[PhpRedis](https://github.com/phpredis/phpredis) extension is required for Redis support. By the official [Laravel Redis Docs](https://laravel.com/docs/12.x/redis#introduction) suggestion we are using as PHP extension. This extension is installed with Dockerfiles.

## 🔸 Docker Compose

In this project all features are containerized and can be run with a single command. You can run the following command to start all containers:

Dev:

```bash
docker compose -f docker-compose-dev.yml up -d
```

Prod:

```bash
docker compose up -d
```

You can modify the docker-compose files if needed (e.g. adding services, removing services etc.).

> {info} Default docker-compose files: `./docker-compose.yml`, `./docker-compose-dev.yml`

Some changes are not affected by docker-compose files. For example, when you change the database user/password or install/remove new PHP extension, `.env` or `Dockerfile` changes won't affect the containers. You need to rebuild the containers to apply the changes with `--build` flag.

Dev:

```bash
docker compose -f docker-compose-dev.yml up -d --build
```

Prod:

```bash
docker compose up -d --build
```
