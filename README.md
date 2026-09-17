Markdown
# 🚀 Blog-in-PHP

Sistema web y blog de portafolio personal desarrollado en PHP utilizando una arquitectura limpia **Model-View-Controller (MVC)** ligera, sin frameworks pesados de terceros.

---

## 📋 Tabla de Contenidos
- [Características](#-características)
- [Estructura del Proyecto](#-estructura-del-proyecto)
- [Requisitos del Sistema](#-requisitos-del-sistema)
- [Instalación y Configuración](#-instalación-y-configuración)
- [Rutas del Sistema](#-rutas-del-sistema)
- [Convenciones de Desarrollo](#-convenciones-de-desarrollo)
- [Licencia](#-licencia)

---

## ✨ Características

- **Arquitectura MVC personalizada:** Separación clara entre lógica de negocio, controladores y plantillas de vista.
- **Autoloading PSR-4:** Carga de clases mediante Composer para mantener un código estructurado y limpio.
- **Enrutador HTTP personalizado:** Manejo flexible de peticiones `GET`, `POST` y `DELETE`.
- **Helpers Globales:** Funciones auxiliares globales para la renderización de vistas, conexión PDO a base de datos y manejo de respuestas.
- **Base de Datos MySQL:** Consultas optimizadas usando sentencias preparadas con PDO.
- **Frontend Moderno:** Interfaz responsiva integrada con Tailwind CSS.

---

## 📁 Estructura del Proyecto

```text
Blog-in-PHP/
├── app/
│   └── Controllers/       # Controladores de la aplicación
│       ├── HomeController.php
│       ├── AboutController.php
│       ├── LinksController.php
│       └── PostController.php
├── framework/
│   ├── Helpers.php        # Funciones globales auxiliares (view(), db(), etc.)
│   └── Router.php         # Motor de enrutamiento HTTP
├── public/                # DocumentRoot expuesto por el servidor web
│   ├── .htaccess          # Reescritura de URLs hacia index.php
│   └── index.php          # Punto de entrada principal (Front Controller)
├── resources/             # Vistas (.template.php)
│   ├── home.template.php
│   ├── about.template.php
│   ├── links.template.php
│   └── post.template.php
├── routes/
│   └── web.php            # Definición de rutas del sistema
├── .htaccess              # Redirección automática de la raíz a /public
├── bootstrap.php          # Inicializador del Autoload y utilidades
├── composer.json          # Configuración de dependencias y PSR-4
└── README.md              # Documentación del proyecto
