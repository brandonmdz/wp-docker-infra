# Docker Infrastructure for WordPress with Nginx, PHP-FPM, MySQL, and Redis

This repository contains a Docker-based infrastructure for setting up a new WordPress website. The infrastructure consists of four containers: Nginx, PHP-FPM, MySQL, and Redis, php-fpm built on top of a Debian base image. Additionally, Redis is used for session storage.

## Setup Instructions

### Prerequisites
- Docker installed on your system
- Git installed on your system

### Step 1: Clone the Repository
```
git clone https://github.com/brandonmdz/wp-docker-infra.git
cd wp-docker-infra
```
### Step 2: Run the First-Time Script

First we need to give execution permission to the script:

```
chmod +x  first-time.sh
```
And now we can execute it:

```
./first-time.sh
```
This script will create the necessary volumes, download WordPress, and set up the initial environment.

### Step 3: Start the Docker Compose
```
docker-compose up -d
```
This command will bring up the Docker containers in detached mode.

## Container Details

### Nginx

- Description: Nginx is used as the web server to handle HTTP requests.
- Configuration: Custom Nginx configuration is available at deps/nginx/nginx.conf.

### PHP-FPM

- Description: PHP-FPM is used to process PHP scripts for WordPress.
- Configuration: PHP configuration files can be found in php-fpm/php.ini.

### Wordpress

- Description: WordPress is the web application used for creating and managing content on the website.
- Configuration:  WordPress files and settings can be found in deps/wp/wp-config.php
- Customizations can be made through the WordPress admin interface.

### MySQL

- Description: MySQL is used as the database server for WordPress.

##### Credentials:

Database credentials are securely stored using Docker secrets, located in the secrets directory. Docker secrets provide a secure way to manage sensitive information such as passwords, ensuring they are not exposed in the source code or Dockerfiles.

### Redis

- Description: Redis is used for session storage.

## Accessing WordPress

- After completing the above steps, you can access the WordPress site at http://your-ip-adress:8080.
