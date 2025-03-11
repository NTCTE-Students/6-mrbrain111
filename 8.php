<?php
// Текущий путь к файлу
$oldFilePath = 'rename_old.txt';

// Новый путь к файлу
$newFilePath = 'rename_new.txt';

if (file_exists($oldFilePath)) {
    if (!file_exists($newFilePath)) {
        // Переименовываем файл
        rename($oldFilePath, $newFilePath);
        
        echo "Файл успешно переименован.";
    } else {
        echo "Предупреждение: Файл с новым именем уже существует.";
    }
} else {
    echo "Файл не существует.";
}
?>