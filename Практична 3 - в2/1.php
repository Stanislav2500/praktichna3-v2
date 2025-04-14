<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Реєстрація</title>
</head>
<body>

<h2>Форма реєстрації</h2>

<?php
error_reporting(E_ALL & ~E_DEPRECATED);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm_password"];

    $login = trim($login);

    if (!preg_match('/^[a-zA-Z0-9_]+$/', $login)) {
        echo "<p style='color:red;'>Логін не може містити спеціальні символи!</p>";
    }
    elseif ($password != $confirm) {
        echo "<p style='color:red;'>Паролі не співпадають!</p>";
    }
    else {
        $login = htmlspecialchars($login);
        echo "<p style='color:green;'>Реєстрація успішна! Вітаємо, <strong>$login</strong>!</p>";
    }
}
?>

<form method="post" action="">
    <label>Логін:</label><br>
    <input type="text" name="login" required><br><br>

    <label>Пароль:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Підтвердження паролю:</label><br>
    <input type="password" name="confirm_password" required><br><br>

    <input type="submit" value="Зареєструватися">
</form>

</body>
</html>
