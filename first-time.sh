#!/bin/bash

WP_DIR="./vols/wordpress"
MYSQL_DIR="./vols/mysql"

# Check if the directories on the host exists
if [ ! -d "$WP_DIR" ]; then
  echo "Creating the $WP_DIR directory on the host..."
  mkdir -p "$WP_DIR"
fi

if [ ! -d "$MYSQL_DIR" ]; then
  echo "Creating the $MYSQL_DIR directory on the host..."
  mkdir -p "$MYSQL_DIR"
fi

mkdir temp
cd temp
curl -LO https://wordpress.org/latest.tar.gz
tar -xzvf latest.tar.gz
cd ..
cp -r ./temp/wordpress/* $WP_DIR
rm -r temp

echo "Files successfully copied to $WP_DIR. You can now start the docker-compose"
