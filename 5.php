<?php
// Указываем путь к файлу
$filePath = 'word_search.txt';

// Слово для поиска
$searchWord = 'test';

if (file_exists($filePath)) {
    // Читаем содержимое файла
    $content = file_get_contents($filePath);
    
    // Разбиваем текст на слова
    $words = explode(' ', $content);
    
    // Подсчитываем количество вхождений искомого слова
    $count = array_reduce($words, function($carry, $item) use ($searchWord) {
        return $carry + ($item === $searchWord ? 1 : 0);
    }, 0);
    
    echo "Слово '$searchWord' встречается $count раз(а).";
} else {
    echo "Файл не существует.";
}
?>