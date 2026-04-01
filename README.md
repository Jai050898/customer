# Customer PHP App Docker Setup

This repository now includes Docker support for local development.

## Prerequisites

- Docker
- Docker Compose

## Quick Start

1. Start the containers:

   ```bash
   docker-compose up -d
   ```

2. Open in browser:

   http://localhost:8080

3. MySQL access:

   - host: db (service) or localhost:3306
   - database: automark_mm_cust
   - user: automark_custusr
   - password: m#184DCuL~6e

## Environment variables

The app uses environment variables for configuration (set in `docker-compose.yml`):

- `DB_HOST`, `DB_USER`, `DB_PASSWORD`, `DB_NAME`
- `SITEPATH`, `SITEURL`, `MAINSITEURL`

## Development workflow

- Code changes are reflected immediately (volume mounted)
- Database data persists in `db_data` volume
- PHP errors are displayed (configured in `docker/php.ini`)

## Stop containers

```bash
docker-compose down
```

## Notes

- Uses PHP 7.4 with Apache (compatible with `mysql_*` functions)
- MySQL 5.7 for database compatibility
- Large files (`photos/`, `files/`, `dbdump/`) are excluded from build context

## Stop

  docker-compose down
