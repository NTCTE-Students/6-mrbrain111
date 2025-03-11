<?php
// Указываем путь к JSON-файлу
$jsonFilePath = 'data.json';

// Читаем данные из JSON-файла
$jsonData = json_decode(file_get_contents($jsonFilePath), true);

// Добавляем новый элемент в массив данных
$jsonData[] = ['id
' => count($jsonData) + 1, 'name' => 'Новый элемент'];

// Сохраняем обновленные данные обратно в файл
file_put_contents($jsonFilePath, json_encode($jsonData, JSON_PRETTY_PRINT));

echo "JSON-данные успешно обновлены.";
?>