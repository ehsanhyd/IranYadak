<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>ورود به حساب کاربری</title>
</head>
<body dir="rtl">
    <?php
        if(isset($_POST['send']))
        {
            $q="select * from `user`";
            $link=mysqli_connect('localhost', 'root', 'mysql', 'iranyadak');
            $result=mysqli_query($link, $q);
            while($r=$result->fetch_array())
            {
                if($r['user_name'] == $_POST['user_name'] && $r['password']==$_POST['password'])
                {
                    $_SESSION['isLogin']="ok";
                    $_SESSION['realName']=$r['real_name'];
                    $_SESSION['user_id']=$r['id'];
                    header('Location:index.php');
                }
                else
                {
                ?>
                    <script>
                        window.onload = function() {
                        const button = document.getElementById('name_p');
                        const inp = document.getElementsByClassName('inp_text');
                        button.innerText = 'نام کاربری و یا رمز عبور اشتباه است!';
                        button.classList.add('eshtep');
                        inp.classList.add('inp_text_eshtep');
                            }
                    </script>
                    <?php
                }
            }
        }
    ?>
        <div id="main" style="height: 60%;">
            <div id="inmain_right">
                <h1 id="h1top">ورود</h1>
                <h1 id="name_p">نام کاربری و رمز عبور خود را وارد کنید.</h1>
                <form method="post">
                    <input type="text" placeholder="نام کاربری" required style="margin-top: 10% !important;" class="inp_text" name="user_name">
                    <input type="password" placeholder="رمز عبور" required class="inp_text" name="password">
                    <input type="submit" value="ورود" id="send" name="send">
                </form>
                <a href="">رمز عبور خود را فراموش کرده اید.</a>
            </div>
            <div id="inmain_left" style="height: 100%;">
                <h1>به بازرگانی ایران یدک خوش آمدید!</h1>
                <h1 id="h1help">برای استفاده بهینه از تمامی امکانات وب سایت ، حساب کاربری ایجاد نمایید.</h1>
                <a href="new.php"> ایجاد حساب کاربری</a>
            </div>
        </div>
    
</body>
</html>