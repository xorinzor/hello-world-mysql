# hello-world-mysql
Simple "Hello World" docker image that can be used to test MySQL connectivity.

Uses the [trafex/php-nginx](https://hub.docker.com/r/trafex/php-nginx) as underlying image. I simply add the index.php file.

## Usage
Provide the environment variables below:
- sql_host
- sql_db
- sql_user
- sql_pass

When loading the index.php page it will attempt to setup a connection to the database and show you the result.