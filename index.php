<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بازرگانی ایران یدک</title>
    <link rel="stylesheet" href="css/style.css?v=2">
    <link href="https://cdn.jsdelivr.net/gh/rastikerdar/shabnam-font/dist/font-face.css" rel="stylesheet" type="text/css">
</head>
<body dir="rtl">
    <div id="menu">
        <a href="index.php"><img src="img/iranyadak.jpg" id="logo" width="120" height="99"></a>
        <a href="index.php" class="link_menu" id="link_saf">صفحه اصلی</a>
        <a href="mahsolat.php" class="link_menu">محصولات شرکتی</a>
        <a href="" class="link_menu">کالا ها</a>
        <a href="" class="link_menu">درباره ما</a>
        <a href="" class="link_menu">تماس با ما</a>
        
        <form action="ceo.php" method="get">
            <?php
                if(isset($_GET['id']))
                {
                    $id = $_GET['id'];
                }
            ?>
            <input type="search" name="search" id="search" placeholder="کالای مورد نظرت رو جستجو کن..." style="height: 1004%;" required>
            <input type="submit" id="send" value="جستجو">
            
        </form>
        <a href="new.php"><img src="img/icon/addUser.png" alt="" class="icon-shoping"></a>
        <a href="sabad.php"><img src="img/icon/shopping-cart.png" class="icon-shoping"></a>
    </div>
    <div id="main">
        <div id="mainright">
            <h1>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>
                </li>
                بازرگانی ایران یدک  عرضه کننده انواع    قطعات یدکی و لوازم یدکی خودرو با کیفیت بالا و استاندارد شرکتی برای انواع خودروهای ایران خودرو، سایپا و … است.
            </h1>
            <hr class="hrm">
            <hr class="hrm">
            <h2>
                کیفیت بالا دستور کار ماست.
            </h2>
        </div>
        <div id="divnoteicon">
            <h1 id="h1divnote"> تامین کننده</h1>
            <h1 id="notedivnote">بازرگانی ایران یدک تامین کننده تخصصی انواع گروه های لوازم یدکی از جمله : اکسل خودرو ، جلوبندی ، پیستون و... است.</h1>
            <img src="img/icon/icons8-task-10.png" id="iconrightmain" width="80px" height="80px" >
            
        </div>
        <div id="divcash">
            <h1 id="h1cash">قیمت مناسب</h1>
            <h1 id="notecash">بازرگانی ایران یدک تمامی گروه های لوازم یدکی را با کیفیت بالا و قیمت مناسب تامین میکند.</h1>
            <img src="img/icon/icons8-cash-100.png" id="cashrightmain" width="80px" height="80px" >
        </div>
        <div id="divbrand">
            <h1 id="h1brand">تامین کننده برند ها</h1>
            <h1 id="notebrand">بازرگانی ایران یدک تامین کننده تمامی برند ها از انواع گروه های لوازم یدکی است.</h1>
            <img src="img/icon/icons8-brand-100.png" id="brand" width="80px" height="80px">
        </div>
        <div id="divservice">
            <h1 id="h1service">خدمات پس از فروش</h1>
            <h1 id="noteservice">بازرگانی ایران یدک همراه با ارائه خدمات پس از فروش رضایت مشتریان را جلب نموده است.</h1>
            <img src="img/icon/icons8-service-100.png" id="service">
        </div>
    </div>
    <div id="main2">
        <img src="img/iranyadak.jpg" id="logoiranpart" width="183px" height="150px">
        <h1 id="downlogo">کیفیت بالا دستور کار ماست</h1>
        <h1 id="namelogo">بازرگانی ایران یدک</h1>
    </div>
    <div id="mahsolat">
        <h1 id="nm">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z" clip-rule="evenodd" />
                </svg>
            </li>
            محصولات</h1>
    </div>
    <div id="picmahsolat">
            <div id="divbushpiston" class="divmahsol">
                <img src="img/boshpiston/bushpiston.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notebushpiston">بوش پیستون با گژنپین</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/disk/disk.jpg" class="imgmahsol" width="200px" height="200px">
                <div mahsol="divnotemahsol">
                    <h1 id="notedisk">دیسک صفحه</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/disktormoz/disktor.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notedisktor">دیسک ترمز</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/bolbering/bolbering.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notebolbering">بلبرینگ</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/komakfanar/kfanar.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notekfanar">کمک فنر</h1>
                </div>
            </div> 
            <div id="divsham" class="divmahsol">
                <img src="img/sham/sham.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notesham">شمع</h1>
                </div>
            </div> 
            <div class="divmahsol">
                <img src="img/sarcharkh/sarcharkh.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notesarcharkh">سر چرخ</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/lenttormoz/lenttor.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notelenttor">لنت ترمز</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/tasme/tasmetime.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notetasmetime">تسمه تایم</h1>
                </div>
            </div>
            <div class="divmahsol">
                <img src="img/tasme/tasmedinam.jpg" class="imgmahsol" width="200px" height="200px">
                <div class="divnotemahsol">
                    <h1 id="notetasmedinam">تسمه دینام</h1>
                </div>
            </div>
    </div>
    <div id="notema">
        <p>بازرگانی ما با افتخار به‌عنوان یکی از پیشگامان در زمینه خرید و فروش لوازم یدکی خودرو، سال‌هاست که نیازهای مشتریان را با ارائه محصولات باکیفیت و خدمات بی‌نظیر برآورده می‌کند. محصولات ما شامل طیف گسترده‌ای از لوازم یدکی خودروهای سواری و تجاری است که از جمله آن‌ها می‌توان به انواع دیسک و صفحه، لنت ترمز، فیلترهای هوا و روغن، بلبرینگ‌ها، تسمه تایم و دینام، و سیستم‌های تعلیق و جلوبندی اشاره کرد. تمامی این قطعات از برندهای معتبر داخلی و خارجی تهیه شده‌اند و کیفیت آن‌ها کاملاً تضمین‌شده است.

ما به رضایت کامل مشتریان اهمیت ویژه‌ای می‌دهیم، و مفتخریم که تا به امروز تمامی خریداران ما از کیفیت عالی محصولات و قیمت‌های رقابتی ما ابراز رضایت کرده‌اند. با ارائه مشاوره تخصصی از سوی تیم حرفه‌ای‌مان، انتخاب بهترین قطعات متناسب با خودروی شما به تجربه‌ای آسان و مطمئن تبدیل می‌شود. هدف ما، همراهی با شما در مسیر افزایش کارایی و ایمنی خودروهای شما است. تعهد به صداقت، شفافیت و جلب اعتماد مشتریان از ارزش‌های اصلی ما محسوب می‌شود و ما برای تحقق این اهداف همواره در تلاش هستیم.

با انتخاب ما، تجربه‌ای متفاوت از خرید لوازم یدکی خودرو را تجربه کنید و اطمینان داشته باشید که کیفیت و خدمات بی‌نظیر در هر مرحله همراه شما خواهند بود.
        </p>
    </div>
    <div id="darbarema" height: 200px;>
        <h1 id="callnetwork">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                    <path d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                </svg>
            </li>
        شبکه های ارتباطی</h1>
        <img src="img/icon/whatsapp.png" id="whatsapp">
        <img src="img/icon/telegram.png"  id="telegram">
    </div>
    <div id="email">
        <h1 class="noteemail">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                    <path d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                </svg>
            </li>
        ایمیل</h1>
        <h1 class="noteemail" id="kemail">info.iran.yadak@gmail.com</h1>
    </div>
    <div id="call">
        <h1 id="h1call">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z" clip-rule="evenodd" />
                </svg>
            </li>
        شماره تماس</h1>
        <h1 id="phone">
            09028272383
        </h1>
    </div>
    <div id="akhar" margin-top='100px'>
        <div class="divakhar" id="divsupport">
            <img src="img/icon/support.png" id="support">
            <h1 id="pasokh">پاسخگویی آنلاین</h1>
        </div>
        <div class="divakhar" id="divgaranty">
            <img src="img/icon/badge.png" id="garanty">
            <h1 id="notegaranty">گارانتی کالا</h1>
        </div>
        <div class="divakhar" id="divasl">
            <img src="img/icon/warranty.png" id="asl">
            <h1 id="noteasl">ضمانت اصل بودن کالا</h1>
        </div>
        <div class="divakhar" id="divpackage">
            <img src="img/icon/package.png" id="package">
            <h1 id="notepackage">بسته بندی سالم</h1>
        </div>
        <hr>
        <h1 id="trah">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" id="iconmonitor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                </svg>
            </li>
        طراح سایت: احسان حیدرفام</h1>
    </div>
</body>
</html>