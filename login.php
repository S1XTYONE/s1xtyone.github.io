<?php 
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $file = fopen("data.txt", "w+") or die ("file not found");
    
    $s = $email . ";" . $pass . '\n';
    fputs($file, $s) or die ("Ошибка!");
    
    fclose($file);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
    <form action="#" method="post">
        email: <input type="email" name="email"><br>
        pass: <input type="password" name="pass">
        <input type="submit" name="submit" value="Вход">
    </form>
</body>
</html>