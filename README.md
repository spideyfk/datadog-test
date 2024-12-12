### Prerequiresites

- composer (https://getcomposer.org/)
- docker (https://docs.docker.com/get-docker/)

After docker installed it may prompt to run the following command in you terminal. **DO NOT RUN**, since it will use the port :80 which will need to the application.
![Docker!](https://user-images.githubusercontent.com/207759/84058442-872ae280-a9b9-11ea-9853-6899721d7213.png)

### Setup Env

```
copy .env.example into .env
```

### Docker Config
###### (if needed)
```
Update your docker to use at least 4 GB memory
```


### Build containers

```
./dev build
```

### Start Laravel

```
./dev up
```

Containers:

```
sleep.app: php
mariadb: mysql
redis_1: redis
```

### Get into shell
###### (if needed)
```
./dev shell
```

### Initialization

```
composer install
php artisan key:generate --ansi
```

