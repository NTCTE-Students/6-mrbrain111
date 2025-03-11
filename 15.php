<?php
// Указываем пути к файлам
$sourceFilePath = 'original_text.txt';
$destinationFilePath = 'replaced_text.txt';

// Слово для поиска
$searchWord = 'старое_слово';

// Новое слово для замены
$replacementWord = 'новое_слово';

if (file_exists($sourceFilePath)) {
    // Читаем содержимое файла
    $content = file_get_contents($sourceFilePath);
    
    // Заменяем старое слово на новое
    $replacedContent = str_replace($searchWord, $replacementWord, $content);
    
    // Сохраняем результат в новый файл
    file_put_contents($destinationFilePath, $replacedContent);
    
    echo "Текст успешно заменен и сохранен в новый файл.";
} else {
    echo "Исходный файл не существует.";
}
?>