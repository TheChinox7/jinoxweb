# JinoxWeb — Portafolio en Laravel 12

Proyecto de portafolio personal construido sobre Laravel 12 (PHP 8.2), con vistas personalizadas, assets estáticos y un formulario de contacto que integra WhatsApp mediante Evolution API.

## Características

- Página principal (`/`) con contenido en español y diseño de portafolio.
- Formulario de contacto que envía mensajes por WhatsApp via Evolution API.
- Pipeline de assets con Vite (`npm run dev` / `npm run build`).
- Migraciones, colas y sesiones configuradas en base de datos.

## Tecnologías y versiones

- `PHP` `^8.2`
- `Laravel` `^12.0`
- `Vite` `^7.x`
- `Node.js` y `npm` (para assets)
- Opcional: `tailwindcss` (presente en devDependencies, no requerido para los estilos actuales).

## Estructura del proyecto

- `routes/web.php`: Define rutas principales (`GET /`, `POST /contact`).
- `resources/views/welcome.blade.php`: Vista principal del portafolio y formulario de contacto.
- `public/`: Assets estáticos (CSS, JS, imágenes). El front controller es `public/index.php` con `.htaccess` para Apache.
- `app/Http/Controllers/ContactController.php`: Lógica para enviar WhatsApp usando Evolution API.
- `config/*`: Configuraciones de app, mail, queue, etc.
- `database/migrations/*`: Migraciones por defecto (usuarios, cache, jobs).

## Requisitos

- XAMPP (Apache y MySQL activos) o entorno LAMP/Laravel equivalente.
- Base de datos MySQL creada: `jinoxweb` (según `.env.example`).
- Composer y PHP 8.2.
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
- Evolution API (WhatsApp):
  - `EVOLUTION_API_URL` (URL base de la API)
  - `EVOLUTION_API_KEY` (API key privada)
  - `EVOLUTION_API_INSTANCE_NAME` (nombre de instancia)


## Ejecución en desarrollo

- Opción 1 (Apache/XAMPP): accede a `http://localhost/jinoxweb/public`.
- Opción 2 (servidor embebido): `php artisan serve` y abre la URL indicada.
- Activa Vite para assets: `npm run dev`.
- Alternativa integrada: `composer run dev` (levanta servidor PHP, queue listener y Vite con `concurrently`).

## Compilación de assets

- Desarrollo: `npm run dev`
- Producción: `npm run build` (genera assets optimizados)

## Rutas y API

- `GET /` → Renderiza `welcome.blade.php`.
- `POST /contact` → Envío de WhatsApp (`ContactController@sendWhatsApp`).

Request (form-data o JSON):

- `dial_code` (string, requerido, formato `+593`, `+34`, etc.)
- `phone` (string, requerido, solo dígitos, 7–15 caracteres)
- `message` (string, opcional, máximo 1000 caracteres)

Respuesta (JSON):

- Éxito: `{ success: true, message: "Mensaje enviado correctamente." }`
- Error de validación: `{ success: false, message: "Datos inválidos.", errors: {...} }` (422)
- Error de API: `{ success: false, message: "..." }` (código HTTP desde Evolution API)

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

## Autor

Portafolio de Jino Morales — Desarrollador Full Stack.
