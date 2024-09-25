<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./shark.css">
    <title>Document</title>
</head>
<body>
<div class="box">
        <div class="shark"></div>
        <div class="shark"></div>
        <div class="shark"></div>
        <div class="shark"></div>
    </div>
    <!-- 表单盒子 -->
    <div class="form-box">
        <!-- 登录盒子 -->

        <div class="login-box">
            <!-- 标题 -->
            <h1 class="title">
                Sign in
            </h1>
            <!-- 图片盒子 -->
            <div class="img-box">
                <!-- 图片 -->
                <img src="./images/woodpecker.png" alt="">
            </div>
            <!-- 输入框盒子 -->
            <div class="input-box">
                <form action="index.php" method="POST">
                <!-- 输入框 -->
                <input name="username" type="text">
                <input name="password" type="text">
                <input name="submit" type="submit"></input>
                </form>
            </div>
        </div>
        
    </div>
<p class="return"><?php
if (isset($_POST['submit'])) {

    function error_die($msg)
    {
        echo $msg;
        die();
    }

    include '_config.php';
    $userLen = 12;

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) != $userLen) {
        error_die("山科大学号是多少位呀?");
    }

    $query = "SELECT * FROM information WHERE username = '$username' AND password = '$password'";

    $result = $link->query($query);
    
    if (!$result) {
        die("我问了小鲨鱼,他说你sql语句写错了,根本就没学明白!");
    }
    
    $row = $result->fetch_assoc();

    if ($row == false) {
        error_die("用户名或密码错误");
    } else {
        $name = $row['username'];
        $pass = $row['password'];
        error_die("success!,your username is " . $name . ",your password is " . $pass . ",but where is the flag?");
    }
}
?>
<p>
</body>
</html>





