<?php
include("./config/db.php");
if(isset($_COOKIE["UserLogin"])) {
    //setcookie("UserLogin", "", time()-3600);
    $fine = "SELECT * FROM userlogin";
    $data = $mysqli->query($fine);
    while($row = mysqli_fetch_assoc($data)) {
        if($_COOKIE["UserLogin"] == $row['user'] . $row['password']) {
            header("location:../Public/HTML/Admin-Dashboard/Admin-Dahboard.php");
        }
    }
} else {
    if(isset($_POST["login"])) {
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $name = "UserLogin";
        $value = $email . $pass;
        setcookie($name, $value, time() + 3600);
        $sql = "INSERT INTO userlogin VALUES('', '$email', '$pass');";
        $mysqli->query($sql);
        header("location:../Public/HTML/Admin-Dashboard/Admin-Dahboard.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/CSS/login.css">
    <?php
        include("./config/link.php");
?>
    <title>Login</title>
</head>
<body>
    <form class="form" action="" method="post" enctype="multipart/form-data">
        <div class="title">
            <h1>USER LOGIN</h1>
        </div>
        <div class="username form-group">
            <label for="email">username</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="example@gmail.com">
            <label for="password">password</label>
            <input type="text" name="password" id="password" class="form-control" placeholder="password">
        </div>
        <div class="btnlogin">
            <button type="submit" name="login">Login</button>
        </div>
    </form>
</body>
</html>