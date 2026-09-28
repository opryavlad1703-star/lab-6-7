<?php 

$tasks_json = file_get_contents('data.json'); 
$tasks = json_decode($tasks_json, true); 

?> 

<?php foreach($tasks as $task): ?> 
    <h2><?= htmlspecialchars($task['title']); ?></h2> 
    <p><?= htmlspecialchars($task['description']); ?></p> 
    <p>Пріоритет: <?= htmlspecialchars($task['priority']); ?></p>
    <hr>
<?php endforeach; ?> 