# PoC PHP 8.5 + Apache

## Requirements

- Docker
- Docker Compose

## Usage

### Build production image

```sh
make build-prod
```

Builds the application using the `base` build target.

### Build development image with Xdebug

```sh
make build-dev
```

Builds the application using the `dev` build target.

### Start services

```sh
make up
```

Starts all services in detached mode.

### Stop services

```sh
make down
```

Stops and removes the containers.

### View application logs

```sh
make logs
```

Follows logs from the `app` container.