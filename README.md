# Patrones de Diseño en PHP

## Descripción

Este proyecto muestra la aplicación práctica de algunos patrones de diseño fundamentales en el desarrollo de software, implementados en PHP.
Los patrones de diseño son soluciones reutilizables para problemas comunes en el diseño de software. Este repositorio incluye ejemplos simples orientados a comprender su lógica y utilidad.

### Patrones implementados

## Nivel 1

🐯 Singleton: Tigger

Modela el personaje Tigger del libro Winnie The Pooh como un Singleton.

Garantiza que solo pueda existir una única instancia de Tigger durante toda la ejecución del programa.

Cada vez que Tigger ruge, se incrementa un contador interno.

Permite obtener el número total de rugidos realizados.

🔑 Dependency Injection: Prepararse para salir

Simula la acción de una persona que prepara sus pertenencias antes de salir de casa (cartera, llaves, smartphone, etc.).

Utiliza el patrón de Inyección de Dependencias para organizar los objetos que forman parte de esta preparación.

### Estructura del repositorio

.
├── tigger.php           # Implementación del patrón Singleton
├── prepare.php          # Implementación del patrón Dependency Injection
└── README.md            # Este archivo

Cómo ejecutar los ejemplos
Clona el repositorio:

git clone <https://github.com/Antonia90/3.1-PHP_Patterns.git>
cd patterns
