# Vigihdev WP Event Dispatcher

A lightweight and flexible **event dispatcher for WordPress**, inspired by the architecture of **Symfony's EventDispatcher**.  
This library helps developers build cleaner, modular, and scalable WordPress plugins or themes using an event-driven pattern.

## 🚀 Features

- Simple event dispatcher class
- Supports multiple listeners per event
- Listener auto-registration via service container
- Works with any WordPress plugin or theme
- Encourages clean and decoupled architecture
- Zero dependencies, lightweight, and fast

---

## 📦 Installation

Install via Composer:

```bash
composer require vigihdev/wp-event-dispatcher
```

Make sure Composer autoloading is enabled inside your WordPress plugin or theme.

## 🧩 Basic Usage

### 1. Create the dispatcher

```php
use Vigihdev\WpEventDispatcher\Core\Dispatcher;

$dispatcher = new Dispatcher();
```

### 2. Register a listener

```php
$dispatcher->addListener('page_render', function ($postId) {
    error_log("Page rendered: " . $postId);
});
```

### 3. Dispatch an event

```php
$dispatcher->dispatch('page_render', get_the_ID());
```

## 🔧 WordPress Integration Example

Trigger dispatcher when a page is rendered:

```php
add_action('wp', function () use ($dispatcher) {
    $dispatcher->dispatch('page_render', get_queried_object_id());
});
```

## 📝 License

This project is licensed under the **MIT License**.

## 👤 Author

**Vigih Dev**
Email: [vigihdev@gmail.com](mailto:vigihdev@gmail.com)
GitHub: [https://github.com/vigihdev](https://github.com/vigihdev)
