<?php
// Массив данных
$data = [
    ['Имя', 'Возраст'],
    ['Иван', 25],
    ['Мария', 30]
];

// Указываем путь к CSV-файлу
$csvFilePath = 'output.csv';

// Преобразуем массив в строки CSV
$lines = array_map(function($row) {
    return implode(',', $row);
}, $data);

// Сохраняем данные в файл
file_put_contents($csvFilePath, implode("\n", $lines));

echo "Данные успешно записаны в CSV-файл.";
?>