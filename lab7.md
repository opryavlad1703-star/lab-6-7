
# Звіт до Лабораторної роботи №7

## 1. Блок коду валідації (PHP)
```php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = htmlspecialchars(trim($_POST['title'] ?? ''));
    $description = htmlspecialchars(trim($_POST['description'] ?? ''));

    if (empty($title)) {
        $errors[] = "Поле Назва є обов'язковим для заповнення!";
    }
    if (empty($description)) {
        $errors[] = "Поле Опис є обов'язковим для заповнення!";
    }
}
![Скриншот](screenshot1.png)