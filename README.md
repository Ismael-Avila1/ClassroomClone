# Requerimientos Funcionales Alcanzados

## Puntos alcanzados:  830/1000

## Almacenamiento de la información (Database) - (100)

- [x] Esquema de la base de datos o sistema de almacenamiento (Migrations). - 50
- [ ] Generación de datos de prueba o catálogos (Seeders & Factories). - 30
- [x] Asignación de Foreign Key Constraints - 20

## Autenticación y autorización - (100)

- [x] Registro y autenticación de usuarios (login/logout, Sessions, Middleware Auth). - 40
- [ ] Restringir, permitir o modificar el comportamiento, opciones o acciones en función del tipo de usuario o condiciones (Gates, Policies, Middleware). - 60

## Validación - (100)

- [x] Todo formulario deberá ser validado en el lado del servidor. - 70
- [x] Agregar validaciones en el cliente mediante html5 o js. - 30

## UI/UX - (130)

- [x] Implementar diseño responsivo. Se sugiere utilizar un framework de CSS o un template basado en framework de CSS. - 50
- [x] Se sugiere reutilizar elementos comunes (layout, partial views, components). - 20
- [x] Mostrar login/logout. - 10
- [x] Mostrar errores de validación de formularios. - 20
- [ ] Mostrar mensajes de éxito al crear, editar o eliminar registros. - 10
- [x] Navegación dentro de la aplicación (navbar, menu, breadcrumb). - 20

## ORM: Object-Relational mapping (Eloquent) (100)

- [x] Implementar clases que describan el sistema de almacenamiento (tablas y sus relaciones) (Modelos). - 50
- [x] Utilizar estas clases y métodos para consulta y almacenamiento de la información. - 50

## Operación CRUD (100)

- [x] Implementar al menos un CRUD (Resource Controller). - 100

## Relaciones (100)

La información almacenada deberá estar relacionada:

- [x] Uno a muchos (1:m). - 50
- [x] Muchos a muchos (m:n). - 50

## Consulta, creación y eliminación de información (50)

- [ ] Resolver problema de N + 1 consultas (Eager loading) - 20
- [ ] Implementar borrado lógico (Soft Deletes). - 20
- [ ] Modificar información al consultar o guardar (Accessors, Muttators). - 10

## API (20)

- [ ] Crear ruta que realice una consulta y cuya respuesta sea un JSON. - 20

## Archivos (100)

- [x] Carga de archivos, uno o muchos a la vez. - 50
- [x] Mostrar archivo o listado de archivos. - 30
- [x] Eliminar o reemplazar archivos. - 20

## Correo electrónico (100)

Implementar el envío de correo electrónico en al menos una de las siguientes modalidades: - 100

- [x] Verificación de correo al crear cuenta de usuario.
- [ ] Envío de correo electrónico personalizado.



## Extras

- [ ] Crear una relación con más de un modelo (Polimórfica). - 20
- [ ] Relación muchos a muchos con información particular a la relación (información adicional en tabla pivote). - 20
- [ ] Generar documento pdf, excel, word, etc. - 20
- [ ] Programación de tareas recurrentes (Task Scheduling). - 30
- [ ] Creación de colas de tareas (Jobs). - 30
- [ ] Autenticación mediante credenciales de terceros (google, twitter, facebook, github). - 50
- [ ] Implementar sistema de pago. - 50
