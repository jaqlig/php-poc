.PHONY: build-prod build-dev up down logs

build-prod:
	BUILD_TARGET=base docker compose build app

build-dev:
	BUILD_TARGET=dev docker compose build app

up:
	docker compose up -d

down:
	docker compose down

logs:
	docker compose logs -f app
