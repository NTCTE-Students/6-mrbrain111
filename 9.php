<?php
// Указываем путь к CSV-файлу
$csvFilePath = 'data.csv';

if (file_exists($csvFilePath)) {
    // Читаем содержимое CSV-файла
    $rows = array_map('str_getcsv', file($csvFilePath));
    
    // Формируем таблицу HTML
    echo '<table border="1">';
    foreach ($rows as $row) {
        echo '<tr>';
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "CSV-файл не существует.";
}
?>