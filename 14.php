<?php
// Директория, которую нужно скопировать
$sourceDir = 'files_to_backup';

// Дата для имени резервной копии
$backupDate = date('Y-m-d_H-i-s');

// Папка для хранения резервных копий
$backupDir = 'backups/backup_' . $backupDate;

// Создаем директорию для резервной копии
mkdir($backupDir, 0777, true);

// Получаем список файлов в исходной директории
$files = scandir($sourceDir);

foreach ($files as $file) {
    if ($file != '.' && $file != '..') {
        // Копируем каждый файл в новую директорию
        copy("$sourceDir/$file", "$backupDir/$file");
    }
}

echo "Резервная копия создана в директории $backupDir.";
?>