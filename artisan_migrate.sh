#!/usr/bin/env bash
docker-compose exec php bash -c 'php artisan migrate:fresh --seed'
