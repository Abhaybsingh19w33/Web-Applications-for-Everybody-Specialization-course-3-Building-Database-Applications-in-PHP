<?php
require_once "pdo.php";

if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) ) {
    $sql = "INSERT INTO users (name,email,password) VALUES ( :name, :email, :password)";

    echo("<pre>");
    echo($sql);
    echo("<pre>");

    $stmt = $pdo -> prepare($sql);
    $stmt -> execute (array(
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password']));
}
?>

<html>
<head></head>

<body>
    <p>Add A New User</p>
    <form method="post">
        <p>Name:<input type="text" name="name" size="40"></p>
        <p>Email:
            <input type="text" name="email">
        </p>
        <p>Pasword:
            <input type="password" name="password">
        </p>
        <p>
            <input type="submit" value="Add New">
        </p>
    </form>
</body>
</html>