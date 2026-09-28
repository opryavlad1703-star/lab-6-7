<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

   $title = '';
   $description = '';
   $priority = '';

   if(isset($_POST['title'])) {
     $title = $_POST['title'];
   }

   if (isset($_POST['description'])) {
        $description = $_POST['description'];
   }
   
   if (isset($_POST['priority'])) {
        $priority = $_POST['priority'];
   }

   $data = file_get_contents("data.json");
   $data = json_decode($data, true);


   $data[] = [
    'title'=> $title,
    'description'=> $description,
    'priority'=> $priority

   ];
   

   $data = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
   file_put_contents('data.json', $data);

   echo '<h1>Дані збережено!</h1>';
   echo "<a href='index.php'>Назад</a>";
}
?>
<form action="create.php" method="POST"> 
    <input type="text" name="title" placeholder="Назва завдання" required> 
    <br><br> 
    <textarea name="description" placeholder="Опис завдання" required></textarea> 
    <br><br> 
    <select name="priority" required> 
        <option value="Low">Low</option> 
        <option value="Medium">Medium</option> 
        <option value="High">High</option> 
    </select> 
    <br><br> 
    <button type="submit">Зберегти</button> 
</form>

<a href="index.php">Назад</a>