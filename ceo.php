<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کالای مورد نظر شما</title>
    <link rel="stylesheet" href="css/style-ceo.css?v=2">
<body dir="rtl">
    <?php
        $link=mysqli_connect("localhost","root","mysql","iranyadak");
    ?>

<div id="menu">
        <a href="index.php"><img src="img/iranyadak.jpg" id="logo" width="120" height="99"></a>
        <a href="index.php" class="link_menu" id="link_saf">صفحه اصلی</a>
        <a href="mahsolat.php" class="link_menu">محصولات شرکتی</a>
        <a href="" class="link_menu">کالا ها</a>
        <a href="" class="link_menu">درباره ما</a>
        <a href="" class="link_menu">تماس با ما</a>
        
        <form action="ceo.php" method="get">
            <input type="search" name="search" id="search" placeholder="کالای مورد نظرت رو جستجو کن..." required>
            <input type="submit" id="send" value="جستجو">
            
        </form>
        <a href="sabad.php"><img src="img/icon/shopping-cart.png" id="icon-shoping"></a>
</div>

<div id="main">

    <?php
        $query="SELECT * FROM `products` where `product_name` like '".$_GET['search']."%'";
        $results=mysqli_query($link,$query);
        if(mysqli_num_rows($results) > 0)
        {
    ?>
            <h1 class="top">نتایج جستجوی شما:</h1>
    <?php
            while($r=$results->fetch_array())
            {
    ?>
                <form action="sabad.php">
                    <div class="divkala">
                        <img src="<?= $r['product_thumbnail']?>" class="imgproduct">
                        <h1 id="h1product"><?= $r['product_name']?></h1>
                        <a href="sabad.php?id=<?=$r['id'] ?>" id="link">افزودن به سبد خرید</a>
                    </div>
                </form>
    <?php
            }
        }
        else{
    ?>
    <h1 class="top">موردی یافت نشد!...</h1>
    <?php
        }
    ?>
</div>
</body>
</html>