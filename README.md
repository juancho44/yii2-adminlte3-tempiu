# Yii2 AdminLTE 3 Tempiu

[![License](https://img.shields.io/badge/license-BSD--4--Clause-blue.svg)](LICENSE)
[![PHP](https://img.shields.io/badge/php-%3E%3D7.0-blue.svg)](https://php.net)
[![Yii2](https://img.shields.io/badge/yii2-~2.0.0-blue.svg)](https://www.yiiframework.com/)

Una extensión completa para Yii2 Framework que integra AdminLTE 3, proporcionando un sistema de administración moderno y responsive con widgets personalizados, generadores CRUD y plantillas de vistas optimizadas.

## 📋 Tabla de Contenidos

- [Características](#características)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Uso Básico](#uso-básico)
- [Widgets Disponibles](#widgets-disponibles)
- [Generadores CRUD](#generadores-crud)
- [Plantillas de Vistas](#plantillas-de-vistas)
- [Assets y Dependencias](#assets-y-dependencias)
- [Ejemplos de Uso](#ejemplos-de-uso)
- [Contribución](#contribución)
- [Licencia](#licencia)

## ✨ Características

- **AdminLTE 3 Integration**: Integración completa con AdminLTE 3 para una interfaz moderna
- **Widgets Personalizados**: Alert, Menu, Toast y ActionColumn optimizados para AdminLTE
- **Generadores CRUD**: Plantillas personalizadas para Gii con diseño AdminLTE
- **Responsive Design**: Interfaz completamente responsive y mobile-friendly
- **Font Awesome 6**: Iconos modernos y consistentes
- **Bootstrap 4**: Framework CSS moderno y robusto
- **Plantillas de Layout**: Layouts principales, login y componentes reutilizables

## 🔧 Requisitos

- PHP >= 7.0
- Yii2 Framework ~2.0.0
- Yii2 Bootstrap4 ~2.0.10
- AdminLTE ^3.1.0
- Font Awesome Free ^6.7.2

## 📦 Instalación

### Via Composer

```bash
composer require juancho44/yii2-adminlte3-tempiu
```

### Configuración Manual

1. Descarga el proyecto
2. Coloca la carpeta `src` en tu proyecto Yii2
3. Configura el autoloader en `composer.json`:

```json
{
    "autoload": {
        "psr-4": {
            "juancho44\\adminlte3\\": "src"
        }
    }
}
```

## 🚀 Uso Básico

### Registro de Assets

```php
use juancho44\adminlte3\assets\AdminLteAsset;
use juancho44\adminlte3\assets\FontAwesomeAsset;

// En tu vista o layout
AdminLteAsset::register($this);
FontAwesomeAsset::register($this);
```

### Layout Principal

```php
<?= $this->render('@juancho44/adminlte3/example/yii2-views/layouts/main') ?>
```

### Layout de Login

```php
<?= $this->render('@juancho44/adminlte3/example/yii2-views/layouts/main-login') ?>
```

## 🎨 Widgets Disponibles

### Alert Widget

Muestra mensajes flash con estilos AdminLTE:

```php
use juancho44\adminlte3\widgets\Alert;

// En tu vista
<?= Alert::widget(); ?>

// Configuración personalizada
<?= Alert::widget([
    'closeButton' => ['tag' => 'button'],
    'isAjaxRemoveFlash' => false
]); ?>
```

### Menu Widget

Menú lateral con soporte para iconos Font Awesome:

```php
use juancho44\adminlte3\widgets\Menu;

<?= Menu::widget([
    'items' => [
        [
            'label' => 'Dashboard',
            'icon' => 'tachometer-alt',
            'url' => ['site/index']
        ],
        [
            'label' => 'Usuarios',
            'icon' => 'users',
            'items' => [
                ['label' => 'Listar', 'url' => ['user/index'], 'icon' => 'list'],
                ['label' => 'Crear', 'url' => ['user/create'], 'icon' => 'plus']
            ]
        ]
    ]
]); ?>
```

### Toast Widget

Notificaciones toast con estilos AdminLTE:

```php
use juancho44\adminlte3\widgets\Toast;

<?= Toast::widget([
    'title' => 'Notificación',
    'delay' => 3000,
    'layout' => 'toasts-top-right'
]); ?>
```

### ActionColumn

Columna de acciones para GridView con iconos Font Awesome:

```php
use juancho44\adminlte3\grid\ActionColumn;

// En tu GridView
'columns' => [
    // ... otras columnas
    ['class' => 'juancho44\adminlte3\grid\ActionColumn'],
]
```

## 🔧 Generadores CRUD

### Configuración en Gii

1. Ve a `/gii` en tu aplicación
2. Selecciona "CRUD Generator"
3. En "Code Template" selecciona "adminlte3"
4. Configura tu modelo y controlador
5. Genera el código

### Características de las Plantillas

- **Vistas Responsive**: Todas las vistas usan Bootstrap 4 y AdminLTE
- **Iconos Font Awesome**: Botones y elementos con iconos modernos
- **Cards AdminLTE**: Contenido organizado en cards elegantes
- **Formularios Optimizados**: Campos de formulario con estilos AdminLTE
- **Breadcrumbs**: Navegación clara con breadcrumbs
- **Paginación Bootstrap 4**: Paginación moderna y responsive

## 🎭 Plantillas de Vistas

### Layouts Disponibles

- **main.php**: Layout principal con sidebar, navbar y footer
- **main-login.php**: Layout para páginas de autenticación
- **navbar.php**: Barra de navegación superior
- **sidebar.php**: Menú lateral con usuario y navegación
- **header.php**: Encabezado de contenido con breadcrumbs
- **footer.php**: Pie de página con información de versión

### Vistas de Ejemplo

- **login.php**: Formulario de login con estilos AdminLTE
- **error.php**: Página de error personalizada
- **CRUD Views**: Vistas completas para operaciones CRUD

## 📁 Estructura del Proyecto

```
src/
├── assets/                 # Assets y bundles
│   ├── AdminLteAsset.php  # Asset principal de AdminLTE
│   ├── FontAwesomeAsset.php # Asset de Font Awesome
│   ├── PluginAsset.php    # Asset de plugins
│   └── plugin/            # Plugins adicionales
│       └── CustomFileInputAsset.php
├── grid/                  # Componentes de grid
│   └── ActionColumn.php   # Columna de acciones personalizada
├── widgets/               # Widgets personalizados
│   ├── Alert.php         # Widget de alertas
│   ├── Menu.php          # Widget de menú
│   └── Toast.php         # Widget de notificaciones
├── gii/                  # Generadores de código
│   └── generators/crud/adminlte3/
│       ├── controller.php # Plantilla de controlador
│       ├── search.php     # Plantilla de búsqueda
│       └── views/         # Plantillas de vistas CRUD
└── example/               # Ejemplos de implementación
    └── yii2-views/        # Vistas de ejemplo
        ├── layouts/       # Layouts de ejemplo
        └── site/          # Vistas de sitio de ejemplo
```

## 💡 Ejemplos de Uso

### Configuración Completa en Layout

```php
<?php
use juancho44\adminlte3\assets\AdminLteAsset;
use juancho44\adminlte3\assets\FontAwesomeAsset;
use juancho44\adminlte3\widgets\Alert;

AdminLteAsset::register($this);
FontAwesomeAsset::register($this);
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $this->title ?></title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $this->render('navbar') ?>
        <?= $this->render('sidebar') ?>
        
        <div class="content-wrapper">
            <?= $this->render('header') ?>
            
            <section class="content">
                <div class="container-fluid">
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>
            </section>
        </div>
        
        <?= $this->render('footer') ?>
    </div>
</body>
</html>
```

### Menú Personalizado

```php
<?= Menu::widget([
    'options' => [
        'class' => 'nav nav-pills nav-sidebar flex-column',
        'data-widget' => 'treeview',
        'role' => 'menu'
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'icon' => 'tachometer-alt',
            'url' => ['site/index']
        ],
        [
            'label' => 'Administración',
            'icon' => 'cogs',
            'badge' => ['message' => 'New', 'badgeType' => 'danger'],
            'items' => [
                ['label' => 'Usuarios', 'url' => ['user/index'], 'icon' => 'users'],
                ['label' => 'Roles', 'url' => ['role/index'], 'icon' => 'user-shield'],
                ['label' => 'Permisos', 'url' => ['permission/index'], 'icon' => 'key']
            ]
        ]
    ]
]); ?>
```

## 🔌 Assets y Dependencias

### Dependencias Principales

- **AdminLTE 3**: Framework de administración moderno
- **Bootstrap 4**: Framework CSS responsive
- **Font Awesome 6**: Iconos vectoriales
- **jQuery**: Biblioteca JavaScript (incluida con AdminLTE)

### Configuración de Assets

```php
// En tu configuración de aplicación
'components' => [
    'assetManager' => [
        'bundles' => [
            'juancho44\adminlte3\assets\AdminLteAsset' => [
                'css' => ['css/adminlte.min.css'],
                'js' => ['js/adminlte.min.js']
            ]
        ]
    ]
]
```

## 🚀 Configuración Avanzada

### Personalización de Temas

```php
// Cambiar el tema de AdminLTE
<body class="hold-transition skin-green sidebar-mini">
// Opciones disponibles: skin-blue, skin-green, skin-red, skin-yellow, skin-purple, skin-black
```

### Configuración de Menú

```php
// Configuración global del menú
Menu::$iconType = 'fas';        // Tipo de icono por defecto
Menu::$iconPrefix = 'fa-';      // Prefijo de icono
Menu::$iconDefault = 'circle';  // Icono por defecto
```

## 🤝 Contribución

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

### Guías de Contribución

- Sigue los estándares de codificación de Yii2
- Añade documentación para nuevas funcionalidades
- Incluye tests para nuevos widgets
- Mantén la compatibilidad con versiones anteriores

## 📝 Licencia

Este proyecto está licenciado bajo la licencia BSD-4-Clause. Ver el archivo [LICENSE](LICENSE) para más detalles.

## 👨‍💻 Autor

**Juancho44** - [juanclama@gmail.com](mailto:juanclama@gmail.com)

## 🙏 Agradecimientos

- [AdminLTE Team](https://adminlte.io/) por el excelente framework de administración
- [Yii2 Framework](https://www.yiiframework.com/) por el framework PHP robusto
- [Font Awesome](https://fontawesome.com/) por los iconos vectoriales
- [Bootstrap](https://getbootstrap.com/) por el framework CSS

## 📞 Soporte

Si tienes alguna pregunta o necesitas ayuda:

- Abre un [issue](https://github.com/juancho44/yii2-adminlte3-tempiu/issues)
- Contacta al autor: [juanclama@gmail.com](mailto:juanclama@gmail.com)
- Consulta la [documentación de Yii2](https://www.yiiframework.com/doc/)

---

**⭐ Si este proyecto te es útil, por favor dale una estrella en GitHub!**
