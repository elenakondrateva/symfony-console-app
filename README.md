# symfony-console-app
Basic PHP CLI application

## Prerequisites
* Git
* Docker

## Installation

Clone repository

```
$ git clone git@github.com:elenakondrateva/symfony-console-app.git
```

Build and run container

```
$ docker build . -t console-helloworld
$ docker run -d -p 9999:80 -v $(pwd):/var/app --name my-console-helloworld console-helloworld
```

SSH to container and nstall dependencies   
```
$ docker exec -it my-console-helloworld sh
$ cd /var/app
$ php7 /usr/sbin/composer install --prefer-dist -o --working-dir=/var/app
```

Run app:
```
./console
```

