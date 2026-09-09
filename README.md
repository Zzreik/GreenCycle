# GreenCycle

Vivero digital: cada usuario planta y cuida sus propios árboles, que crecen y se deterioran según el tiempo, hasta poder cosecharlos por monedas. Con esas monedas se pueden comprar ítems en una tienda (aceleradores, riego automático, semillas especiales) para mejorar el cuidado de los árboles.

## Alcance actual (Sprint 1)

- Modelo de datos completo: usuarios, tipos de semilla, árboles, ítems, inventarios y efectos activos.
- API inicial de árboles: listar, consultar detalle, plantar y eliminar un árbol.
- Validación de entrada en el servidor con Form Requests.
- La estrategia de autenticación (Sanctum, por token) y autorización ya está documentada, pero todavía no está programada en código — queda para la siguiente entrega.

Para los siguientes sprints queda: autenticación real, reglas de deterioro y cooldown, tienda, inventario funcional, cosecha, y la interfaz de usuario.

## Requisitos

- Herd (trae PHP 8.5 y Composer incluidos)
- Node.js y npm
- Base de datos (PostgreSQL)
- El repositorio clonado

No se necesita nada más instalado aparte — Herd se encarga de servir el proyecto automáticamente.

## Instalación

```bash
git clone https://github.com/Zzreik/GreenCycle.git
cd GreenCycle
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Con eso, Herd ya debería estar sirviendo el sitio (revisa la app de Herd para confirmar que el proyecto aparece activo).

## Cómo probar

Como todavía no hay interfaz construida, las pruebas de este sprint se hacen así:

- **Endpoints de la API** (`GET`, `POST`, `DELETE` de árboles): con Thunder Client, mandando las peticiones directo a `http://greencycle.test/api/trees` (y variantes).
- **Nada se prueba desde el navegador todavía**, salvo los `GET` (listar y consultar un árbol), que sí se pueden abrir directo en el navegador.

## API

Endpoints disponibles en este sprint:

| Método | Ruta | Descripción |
|---|---|---|
| GET | /api/trees | Listar árboles (por ahora filtrados manualmente con `?user_id=` como marcador temporal, mientras no hay autenticación) |
| GET | /api/trees/{tree} | Consultar un árbol específico |
| POST | /api/trees | Plantar un árbol nuevo |
| DELETE | /api/trees/{tree} | Eliminar un árbol |

## Credenciales demo

No aplica todavía — el registro y login no están programados en este sprint, solo documentados.

## Equipo

- Sebastian Vasquez Navarro
- Maria Jesus Salas Jimenez

Usamos Claude como apoyo para resolver dudas de Laravel/PHP y revisar la lógica del código mientras lo construíamos.