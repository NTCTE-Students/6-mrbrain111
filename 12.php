<?php
// Указываем путь к лог-файлу
$logFilePath = 'log.txt';

// Текущая дата и время
$dateTime = date('Y-m-d H:i:s');

// Произвольное сообщение
$message = "Это тестовое сообщение.";

// Форматируем строку для записи в лог
$logEntry = "$dateTime - $message\n";

// Добавляем запись в лог-файл
file_put_contents($logFilePath, $logEntry, FILE_APPEND);

echo "Запись успешно добавлена в лог-файл.";
?>