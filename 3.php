<?php
// Указываем путь к файлу
$filePath = 'append_file.txt';

// Новая строка для добавления
$newLine = "\nНовая строка";

// Открываем файл в режиме добавления
$handle = fopen($filePath, 'a');

if ($handle !== false) {
    // Пишем новую строку в конец файла
    fwrite($handle, $newLine);
    
    fclose($handle); // Закрываем файл
    
    echo "Новая строка добавлена в файл.";
} else {
    echo "Ошибка открытия файла.";
}
?>