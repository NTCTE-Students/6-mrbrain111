<?php
// Указываем путь к файлу
$filePath = 'hello_world.txt';

// Строка для записи
$text = "Hello, World!";

// Перезаписываем содержимое файла
file_put_contents($filePath, $text);

echo "Строка успешно записана в файл.";
?>