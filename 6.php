<?php
// Исходный файл
$sourceFile = 'original_file.txt';

// Файл назначения
$destinationFile = 'copy_file.txt';

if (file_exists($sourceFile)) {
    if (!file_exists($destinationFile)) {
        // Копируем содержимое исходного файла в файл назначения
        copy($sourceFile, $destinationFile);
        
        echo "Файл успешно скопирован.";
    } else {
        echo "Предупреждение: Файл назначения уже существует.";
    }
} else {
    echo "Исходный файл не существует.";
}
?>