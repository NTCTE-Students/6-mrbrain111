<?php
// Указываем путь к файлу
$filePath = 'lines_count.txt';

if (file_exists($filePath)) {
    // Считываем все строки файла
    $lines = file($filePath);
    
    // Количество строк равно количеству элементов в массиве
    $lineCount = count($lines);
    
    echo "Количество строк в файле: $lineCount";
} else {
    echo "Файл не существует.";
}
?>