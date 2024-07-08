#!/bin/bash

# Parse arguments
# sh deploy/release.sh env=ver2 -m -d
for args in "$@"; do
  case $args in
  env=*)
    ENV="${args#*=}"
    shift
    ;;
  -m)
    MIGRATE=true
    shift
    ;;
  -ms)
    MIGRATESEED=true
    shift
    ;;
  -d)
    DOCKER=true
    shift
    ;;
  *)
    echo "Invalid argument: $args"
    ;;
  esac
done

# Function to execute commands inside Docker container
run_in_docker() {
    docker exec -u root -it laravel_application bash -c "$1"
}

# Function to clean code git
function clean_code() {
  git reset --hard
  git clean -df
  echo "\n Cleaned code from git. \n\n\n"
}

function pull_code() {
  git pull origin master
  echo "\nPulled code from master.\n\n\n"
}
# Function Docker build and start
function docker_build_start() {
  # If environment is not provided, default to 'local'
  if [ ! -z "$ENV" ]; then
    cp "deploy/.env.$ENV" .env
  fi

  # cp deploy/.htaccess public/.htaccess

  docker stop $(docker ps -aq)
  docker rm $(docker ps -aq)

  docker-compose down

  docker-compose build

  docker-compose up --build -d

  echo "\n Docker build and start completed. \n\n\n"
}

# Function to develop laravel
function deployment() {


  if [ "$DOCKER" ]; then
    
    # if set argument migrate -m or --migrate, migrate database

    if [ "$MIGRATESEED" ]; then
      run_in_docker "php artisan migrate:fresh --seed"
      echo "\n Database migrated and seeded.\n\n\n"
    else
      run_in_docker "php artisan migrate --force"
      echo "\n Database migrated.\n\n\n"
    fi

  fi


  # php artisan test
  # php artisan optimize
  # php artisan config:cache
  # php artisan route:cache
  # /usr/local/bin/ea-php83 artisan view:cache

  echo "Laravel development completed."
}

# Main script execution
clean_code
pull_code
docker_build_start
deployment

sudo chown -R deploy:deploy .
