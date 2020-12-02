# Backends em Docker

É importante iniciar primeiro o Agenda (`docker-compose up -d`).

# Mysql com Adminer

Adminer: http://localhost:8080

## Iniciar 
docker-compose -f .\.docker\mysql.yml up -d

## Verificar logs
docker-compose -f .\.docker\mysql.yml logs -f

docker-compose -f .\.docker\mysql.yml logs mysql

## Parar
docker-compose -f .\.docker\mysql.yml stop

## Remover
docker-compose -f .\.docker\mysql.yml rm


# Mailhog

UI: http://localhost:8025
SMTP: mailhog ou localhost
PORT: 1025

## Iniciar 
docker-compose -f .\.docker\mailhog.yml up -d

## Verificar logs
docker-compose -f .\.docker\mailhog.yml logs -f

docker-compose -f .\.docker\mailhog.yml logs mailhog

## Parar
docker-compose -f .\.docker\mailhog.yml stop

## Remover
docker-compose -f .\.docker\mailhog.yml rm


# Minio

Minio: http://minio:9000 ou http://localhost:9090

## Iniciar 
docker-compose -f .\.docker\minio.yml up -d

## Verificar logs
docker-compose -f .\.docker\minio.yml logs -f

docker-compose -f .\.docker\minio.yml logs minio

## Parar
docker-compose -f .\.docker\minio.yml stop

## Remover
docker-compose -f .\.docker\minio.yml rm


# Postgres

PGAdmin: http://localhost:16543

## Iniciar 
docker-compose -f .\.docker\postgres.yml up -d

## Verificar logs
docker-compose -f .\.docker\postgres.yml logs -f

docker-compose -f .\.docker\postgres.yml logs postgres

## Parar
docker-compose -f .\.docker\postgres.yml stop

## Remover
docker-compose -f .\.docker\postgres.yml rm


# Redis

## Iniciar 
docker-compose -f .\.docker\redis.yml up -d

## Verificar logs
docker-compose -f .\.docker\redis.yml logs -f

docker-compose -f .\.docker\redis.yml logs redis

## Parar
docker-compose -f .\.docker\redis.yml stop

## Remover
docker-compose -f .\.docker\redis.yml rm

##