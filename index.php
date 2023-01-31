<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="num1" id=""><br>
        <input type="number" name="num2" id=""><br>
        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">

    </form>

</body>
</html>

<?php 
    if(isset($_POST['+'])){
    echo $_POST['num1'] + $_POST['num2'];
}
if(isset($_POST['-'])){
    echo $_POST['num1'] - $_POST['num2'];
}
if(isset($_POST['*'])){
    echo $_POST['num1'] * $_POST['num2'];
}
if(isset($_POST['/'])){
    echo $_POST['num1'] / $_POST['num2'];
}