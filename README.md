# Mapa

## Instalación

```bash
# Descargar

git clone https://github.com/rogerforner/mapa-api.git

# Instalar dependencias.

$ composer install && npm install

# Crear el archivo de configuración.
$ cp .env.example .env

# Generar clave.

$ php artisan key:generate

# Passport.

$ php artisan passport:install
```

## Migraciones

```bash
php artisan migrate
```

## Entorno de trabajo

Compilar los assets.

```bash
# Desarrollo.

$ npm run dev
$ npm run watch

# Producción.

$ npm run production
```

Correr servidor.

```bash
$ php artisan serve
```