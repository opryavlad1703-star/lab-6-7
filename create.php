<?php
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = trim($_POST['title'] ?? '');
    $description = trim($_POST['description'] ?? '');

    if (empty($title)) {
        $errors[] = "Поле Назва є обов'язковим!";
    }
    if (empty($description)) {
        $errors[] = "Поле Опис є обов'язковим!";
    }
}
?>

<?php if (!empty($errors)): ?>
    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
        <?php foreach ($errors as $error): ?>
            <p><?= $error ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>


<form action="create.php" method="POST">
    <input type="text" name="title" placeholder="Назва завдання">
    <br><br>
    <textarea name="description" placeholder="Опис завдання"></textarea>
    <br><br>
    <button type="submit">Зберегти</button>
</form>