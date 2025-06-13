# 🏗️ Containers

While working or developing with this starter, you can use the following containers:

---

- [🏗️ Containers](#️-containers)
  - [🔸 PHP Containers](#-php-containers)
  - [🔸 DB Containers](#-db-containers)
  - [🔸 Docker Compose](#-docker-compose)

<a name="php-containers"></a>

## 🔸 PHP Containers

In this starter template, we use the [ServerSideUP](https://serversideup.net/)'s **[serversideup/php](https://serversideup.net/open-source/docker-php/)** container as base PHP container. You can modify the container configuration in the Dockerfiles if needed (e.g. adding extensions, removing Node.js setup etc.).

> {info} Default docker files: `.docker/local/Dockerfile`, `.docker/production/Dockerfile`

## 🔸 DB Containers

WIP...

<a name="docker-compose"></a>

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
