FROM mysql/mysql-server:8.0

COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

COPY ./sql-scripts/images.sql .
