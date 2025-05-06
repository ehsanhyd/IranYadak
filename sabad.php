<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سبد خرید</title>
    <link rel="stylesheet" href="css/style-sabad.css">
</head>
<body dir="rtl">
    <form action="ceo.php">
        <div id="menutop">
            <a href="index.php"><img src="img/iranyadak.jpg" id="logo">
            <h1 id="namelogo">ایران یدک</h1></a>
            <input type="search" name="search" id="search" placeholder="جستجو" required>
            <input type="submit" id="send" value="جستجو" class="hidden">
    </form>
        </div>

        <div id="main">
            <div id="divbtn">
                <input type="submit" value="سبد خرید" class="btntopmain">
                <input type="submit" value="خرید بعدی" class="btntopmain" style="margin-right: 2% !important;">
                <hr>
            </div>
                <?php
                    $link = mysqli_connect("localhost" , "root" , "mysql" , "iranyadak");
                    if(isset($_GET['id']))
                    {
                    $ID = $_GET["id"];
                    $query = "SELECT * FROM `products` where `id` = ".$_GET['id'];
                    $lines = mysqli_query($link,$query);
                    $query = "UPDATE `user` SET `id_product`='$ID' WHERE ";
                    $results = mysqli_query($link , $query);
                    while($r=$results->fetch_array())
                    {
                ?>
                    <div id="mahsol">
                        <img src="<?= $r['product_thumbnail']?>" alt="">
                        <h1 id="namemahsol"><?= $r['product_name']?></h1>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        <h1 id="geimat">قیمت: </h1> <h1 id="gadad">13.000.000</h1>
                    </div>
                <?php
                    }}
                ?>

            </div>
        </div>
    
</body>
</html>