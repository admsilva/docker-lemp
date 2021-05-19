# Docker LEMP

Docker Env for NGINX, MariaDB &amp; PHP with PhpMyAdmin

**L** is for Linux, **E** is for Nginx, **M** is for MySQL and **P** is for PHP.

Support is always appreciated!

## Table of Contents

* [Components](#components)
* [Features](#features)
* [Install](#install)
* [Folder Structure](#folder-structure)
* [Issues](#issues)
* [Changelog](#changelog)
* [Credits](#credits)
* [License](#license)

## Components

- NGINX (latest)
- MariaDB (latest)
- PHP7 (latest)
- PhpMyAdmin (lastest)

## Features

- Logfiles in log/
- WordPress available at docker-compose file

## Install

```
git clone https://github.com/tobbid/docker-lemp.git
cd docker-nmpp
cp sample.env .env
docker-compose up
```

Then please open:

```
http://localhost:8080
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
│  │ 
│  ├─ log
│  │  
│  └─ www
```

## Issues

Please have a look at: https://github.com/tobbid/docker-lemp/issues

- Sometimes the MariaDB 10.5.10 has hickups with starting up on Apple M1

## Changelog

- Coming soon!

## Credits

- Coming soon!

## License

- Coming soon!
