# GreenCycle

Aplicacion web con un vivero digital. Cada persona usuaria cuida sus arboles.
Cada arbol tiene tipo, nivel, salud, progreso y estado. El servidor revisa el
tiempo pasado y aplica las reglas de crecimiento y de vida.

Proyecto final - TM4100 Desarrollo de Aplicaciones Interactivas I, UCR Sede del Pacifico.

## Tecnologias usadas

- **Frontend:** HTML5, CSS3, JavaScript 
- **Backend:** PHP 8.5 con Laravel, Eloquent, Laravel Sanctum, API REST

## Requisitos

- PHP 8.5
- Composer 2
- Node.js 26 y npm
- Laravel Herd 
- Cuenta en Neon (PostgreSQL)

## Instalacion

1. Clonar el repositorio:
```bash
   git clone https://github.com/Zzreik/GreenCycle.git
   cd GreenCycle
```

2. Instalar las dependencias:
```bash
   composer install
   npm ci
```

3. Crear el archivo de entorno:
```bash
   cp .env.example .env
   php artisan key:generate
```

4. Poner la conexion a la base de datos de Neon en la variable `DB_URL` del `.env`.

5. Correr las migraciones:
```bash
   php artisan migrate
```

## Como ejecutar el proyecto

```bash
npm run dev
```

Abrir en el navegador: `http://greencycle.test`

## Equipo

- Sebastian Vasquez Navarro
- Maria Jesus Salas Jimenez