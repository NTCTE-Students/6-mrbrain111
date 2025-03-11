<?php
// Указываем путь к файлу
$filePath = 'delete_file.txt';

if (file_exists($filePath)) {
    // Удаляем файл
    unlink($filePath);
    
    echo "Файл успешно удалён.";
} else {
    echo "Файл не существует.";
}
?>