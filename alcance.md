# Tracker de proyectos y tareas

## Entidades

| Entidad  | Campos                             | Relaciones                                     |
|----------|------------------------------------|------------------------------------------------|
| Usuario  | nombre, email, contraseña          | Tiene muchos proyectos                         |
| Proyecto | nombre, descripción                | Pertenece a un usuario; tiene muchas tareas    |
| Tarea    | título, descripción, fecha límite  | Pertenece a un proyecto; tiene un estado       |
| Estado   | nombre                             | Lo tienen muchas tareas                        |

Estados iniciales: Pendiente, En progreso, Terminada.

## Pantallas

1. **Login y registro**: entrar a la aplicación.
2. **Lista de proyectos**: proyectos del usuario y botón para crear uno nuevo.
3. **Formulario de proyecto**: crear o editar un proyecto.
4. **Detalle de proyecto**: datos del proyecto y la lista de sus tareas con su estado.
5. **Formulario de tarea**: crear o editar una tarea y elegir su estado.

## Fuera de alcance

- Comentarios, etiquetas y archivos adjuntos.
- Varios usuarios por proyecto.