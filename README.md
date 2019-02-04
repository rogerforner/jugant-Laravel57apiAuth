# Proyecto Mapa

## Instalación

**Descargar** el proyecto.

```bash
git clone https://github.com/rogerforner/mapa-api.git
```

**Instalar dependencias** del proyecto.

```bash
composer install
```

**Configurar** a través del archivo _env_.

```bash
cp .env.example .env
```

Generamos una clave aleatoria para el `APP_KEY=` del archivo _env_. Lo podemos hacer a través de, por ejemplo, una ruta en _routes/web.php_.

```php
$router->get('key', function () {
  return str_random(32);
});
```

## Servir la app (local)

```bash
php -S localhost:8000 -t public
```