# MAKYSOFT S.A.S — Sitio corporativo en Laravel 13

Sitio web corporativo de MAKYSOFT S.A.S, empresa ecuatoriana de desarrollo de software. Está construido sobre Laravel 13 (PHP 8.2+) e incluye una landing empresarial responsive, identidad visual oficial y contacto directo por WhatsApp y correo.

## Características

- Página principal (`/`) con contenido corporativo en español.
- Secciones de servicios, soluciones, empresa, proceso y contacto.
- Identidad visual oficial de MAKYSOFT.
- Contacto por WhatsApp al `+593 96 289 4078`.
- Contacto por correo a `soporte@makysoft.com`.
- Pipeline de assets con Vite (`npm run dev` / `npm run build`).
- Migraciones, colas y sesiones configuradas en base de datos.

## Tecnologías y versiones

- `PHP` `^8.2`
- `Laravel` `^13.0`
- `Vite` `^7.x`
- `Node.js` y `npm` (para assets)
- Opcional: `tailwindcss` (presente en devDependencies, no requerido para los estilos actuales).

## Estructura del proyecto

- `routes/web.php`: Define la ruta principal (`GET /`).
- `resources/views/welcome.blade.php`: Landing corporativa de MAKYSOFT.
- `public/`: Assets estáticos (CSS, JS, imágenes). El front controller es `public/index.php` con `.htaccess` para Apache.
- `config/*`: Configuraciones de app, mail, queue, etc.
- `database/migrations/*`: Migraciones por defecto (usuarios, cache, jobs).

## Requisitos

- XAMPP (Apache y MySQL activos) o entorno LAMP/Laravel equivalente.
- Base de datos MySQL creada: `jinoxweb` (según `.env.example`).
- Composer y PHP 8.2 o superior.
- Node.js y npm para el pipeline de assets.

## Instalación

1. Clona o copia el proyecto dentro de `htdocs` (por ejemplo: `.../xamppfiles/htdocs/jinoxweb`).
2. Ejecuta en la raíz del proyecto:
   - `composer install`
   - Copia el archivo de entorno: `cp .env.example .env`
   - Genera la clave de aplicación: `php artisan key:generate`
   - Configura tus credenciales en `.env` (ver sección Configuración).
   - Ejecuta migraciones: `php artisan migrate`
   - Instala dependencias de frontend: `npm install`

## Configuración (.env)

Variables relevantes en `.env`:

- App y base de datos:
  - `APP_URL=http://localhost`
  - `DB_CONNECTION=mysql`
  - `DB_HOST=127.0.0.1`
  - `DB_PORT=3306`
  - `DB_DATABASE=jinoxweb`
  - `DB_USERNAME=root`
  - `DB_PASSWORD=`
- Sesiones/colas/cache (por defecto en base de datos):
  - `SESSION_DRIVER=database`
  - `QUEUE_CONNECTION=database`
  - `CACHE_STORE=database`


## Ejecución en desarrollo

- Opción 1 (Apache/XAMPP): accede a `http://localhost/jinoxweb/public`.
- Opción 2 (servidor embebido): `php artisan serve` y abre la URL indicada.
- Activa Vite para assets: `npm run dev`.
- Alternativa integrada: `composer run dev` (levanta servidor PHP, queue listener y Vite con `concurrently`).

## Compilación de assets

- Desarrollo: `npm run dev`
- Producción: `npm run build` (genera assets optimizados)

## Rutas

- `GET /` → Renderiza `welcome.blade.php`.
- La sección de contacto abre WhatsApp mediante `https://wa.me/593962894078`.

## Testing

- Ejecuta pruebas: `php artisan test`.
- Configura base de datos de pruebas si añades tests específicos.

## Despliegue

- En Apache, asegura que el DocumentRoot apunte al directorio `public/` del proyecto o accede vía `http://localhost/jinoxweb/public`.
- Revisa permisos de almacenamiento: `storage/` y `bootstrap/cache` deben ser escribibles.
- Genera assets de producción: `npm run build`.

## Notas y buenas prácticas

- Mantén `APP_ENV=production` y `APP_DEBUG=false` en producción.
- No subas `.env` ni credenciales privadas al repositorio.
- Actualiza `APP_URL` para reflejar el dominio real en despliegue.

## Empresa

MAKYSOFT S.A.S — Soluciones de software para empresas.
