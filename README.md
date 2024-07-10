## Mysql Database using Docker

```bash
docker run --rm \
  --name symfony-test \
  -e MYSQL_USER=user \
  -e MYSQL_PASSWORD=secret \
  -e MYSQL_ROOT_PASSWORD=secret \
  -e MYSQL_DATABASE=SymfonyTest \
  -p 3306:3306 \
  -v symfonyTest:/var/lib/mysql \
  -d \
  mysql
```