<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        Выберите изображение:<br>
        <input type="file" name="image" accept="image/*"><br><br>
        <input type="submit" value="Отправить">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_FILES['image'])) {
            $file = $_FILES['image'];
            
            // Проверка типа файла
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (!in_array($file['type'], $allowedTypes)) {
                die("Тип файла не поддерживается.");
            }
            
            // Проверка размера файла
            if ($file['size'] > 2000000) { // 2MB
                die("Размер файла превышает допустимый предел.");
            }
            
            // Загружаем файл
            move_uploaded_file($file['tmp_name'], 'uploads/' . basename($file['name']));
            
            echo "Изображение успешно загружено.";
        }
    }
    ?>
</body>
</html>