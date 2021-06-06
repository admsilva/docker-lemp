# Docker LEMP

Docker Environment for NGINX, MariaDB &amp; PHP with PhpMyAdmin

**L** is for Linux, **E** is for Nginx, **M** is for MySQL/MariaDB and **P** is for PHP.

Support is always appreciated! Environment is not optimized for production, yet!

## Table of Contents

* [Components](#components)
* [Features](#features)
* [Install](#install)
* [Folder Structure](#folder-structure)
* [Issues](#issues)
* [Changelog](#changelog)
* [Credits](#credits)

## Components

- NGINX (latest)
- MariaDB (latest)
- PHP7 (latest) - Configuration for PHP8 coming soon
- PhpMyAdmin (lastest)

## Features

- Environment can be used on ARM based devices
- Logfiles in log/
- Configuration available in conf/
- WordPress available at docker-compose file
- Dockerfile included (for additional components)

## Install

```
git clone https://github.com/tobbid/docker-lemp.git
cd docker-lemp
cp sample.env .env
docker-compose up
```

If you want, you can edit the .env file:

```
MYSQL_ROOT_PASSWORD=pass
MYSQL_DATABASE=database
MYSQL_USER=root
MYSQL_PASSWORD=pass
```

After install please open for local environment

```
http://localhost:8080
```

And the following for PhpMyAdmin:

```
http://localhost:8082
```

## Folder structure

```
./
├──┐
│  │
│  ├─ conf
│  │  │
│  │  └─ nginx.conf
│  │ 
│  ├─ db
│  │  │
│  │  └─ database
│  │ 
│  ├─ log
│  │  │
│  │  └─ access & error log
│  │  
│  └─ www (Document root)
│  │  │
│  │  └─ index.php
```

## Issues

- Please have a look at: https://github.com/tobbid/docker-lemp/issues

## Changelog

### Beta

- prepared index.php updated readme.md 
- initial version

## Credits

- Your help is always appreciate. Please let us know, how we can make this environment even better.
