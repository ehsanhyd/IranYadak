<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد حساب کاربری</title>
    <link rel="stylesheet" href="css/style_new.css">
</head>
<body dir="rtl">
    <?php
        if(isset($_POST['send']))
        {
            $name = $_POST["user_name"];
            $query = "INSERT INTO `user`(`user_name`, `password`, `user_phone`, `user_address` , `id_product`) VALUES ('".$_POST["user_name"]."' , '".$_POST["password"]."' , '".$_POST["user_phone"]."' , '".$_POST["user_address"]."' , 0)";
            $link= mysqli_connect('localhost', 'root', 'mysql', 'iranyadak');
            $result = mysqli_query($link, $query);
            header('Location:index.php');
            $_SESSION['isLogin'] = "ok";
        }
        if(isset($_SESSION['isLogin']) && $_SESSION['isLogin']=="ok")
        {
            ?>
                <script>
                    alert("شما قبلا ثبت نام کرده اید.");
                </script>
            <?php
            header('Location:index.php');
        }
            ?>
    <div id="main" style="height: 60%;">
        <div id="inmain_right" style="height: 100%;">
            <h1 id="h1top">ایجاد حساب</h1>
            <h1 id="h1helptop"> لطفا فیلد های زیر را پر کنید.</h1>
            <form method="post" id="form1">
                <input type="text" name="user_phone" placeholder="شماره تلفن" class="inp_text">
                <input type="password" placeholder="رمز عبور" required class="inp_text" name="password">
                <input type="text" name="tekrar_password" id="" placeholder="تکرار رمز عبور" class="inp_text">
                <input type="submit" value="ثبت نام" id="send" name="send" class="inp_text">
                <h1 id="h1link">حساب کاربری دارم:</h1><a href="login.php" id="link">ورود</a>
            </form>
        </div>
        <div id="inmain_left" style="height: 100%;">
            <h1>به بازرگانی ایران یدک خوش آمدید!</h1>
            <h1 id="h1help">برای استفاده بهینه از تمامی امکانات وب سایت ، حساب کاربری ایجاد نمایید.</h1>
            <a href="new.php"> ایجاد حساب کاربری</a>
        </div>
    </div>
</body>
</html>