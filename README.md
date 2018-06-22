# bulks
Docker + wp-content for Bulks Landscape Supply

## Usage

**Your browser must resolve the address of Docker to http://project.bulks/**

Docker For Mac and Docker For Windows, this is localhost.  Docker machine users should run `docker-machine ip` to get the correct address.

`docker-compose up`

* dev site available at http://project.bulks/
* phpmyadmin available at http://project.bulks:81
* db available at http://project.bulks:3306

Update ./db_dump/dev.sql when needed please. 