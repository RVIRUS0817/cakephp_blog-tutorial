## Setup

```
$ pwd
~/git/github/cakephp_blog-tutorial/docker

$ vim .env
```

.env

```
DATABASE=test
CAKE_DATABASE=adachin
USER_NAME=php_user
USER_PASSWORD=php_pw
ROOT_PASSWORD=password
SECURITY_SALT=d3ab664f59147034a6dcd97ae089f5083def7cc0dfcc97f52071234fe37ae82a
```

## config check

```

docker-compose config

```

## run dev

```

docker-compose up

```

## run background

```

docker-compose up -d

```

## prune & run background


```

docker-compose pull && docker image prune -f && docker-compose up -d --build

```

## URL

hosts

```
127.0.0.1 adachin.com
```

http://adachin.com:10080
