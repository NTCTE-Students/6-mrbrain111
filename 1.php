<?php
// Указываем путь к файлу
$filePath = 'example.txt';

if (file_exists($filePath)) {
    // Читаем содержимое файла
    $content = file_get_contents($filePath);
    
    // Выводим содержимое на экран
    echo $content;
} else {
    // Файл не найден
    echo "Файл не существует.";
}
?>