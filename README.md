# hello-world-mysql
Simple "Hello World" docker image that can be used to test MySQL connectivity.
Uses the [trafex/php-nginx](https://hub.docker.com/r/trafex/php-nginx) as underlying image. I simply add the index.php file.

Image name: `xorinzor/hello-world-mysql:latest`

## Usage
Provide the environment variables below:
- sql_host: the hostname to connect to (can be either a hostname or IP address). Optionally add `:<port>` after it to connect to a specific port.
- sql_db: the database to connect to
- sql_user: the username to use
- sql_pass: the password to use
- sql_ssl: If set to `true`, SSL will be used for the connection. Set to `false` by default.
- sql_ssl_verify: If set to `true`, the SSL certificate of the server will be verified. Set to `false` by default.

When loading the index.php page it will attempt to setup a connection to the database and show you the result.
