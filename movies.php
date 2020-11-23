<!DOCTYPE html>
<html lang="ar" dir="rtl">

    <head>
        <meta charset="UTF-8">
        <title>الأفلام</title>

                                   <!-- هنا يبدأ تنسيق صفحة الأفلام -->

        <link rel="stylesheet" href="css/style.css">
        <style>


 .cards
 {
text-align: center;  
background-color: var(--lightColor);

 }

 .card{
    display: inline-block;
     margin: 20px;
    width: 250px;
    height: 400px;
    transition: 0.5s;

}

.card-img{
    width:100%;
    height: 100%;
     display: block;
}


.card:hover{
    width: 250px;
    height: 400px;

   transform: scale(1.1);
   transition: 0.2s;
}

        </style>
    </head>
                   

                                           <!-- هنا تبدأ الصفحة -->

    <body>

        <?php

            include 'goup.php';

        ?>
        <div class="container">
            <nav class="navBar">
                <ul class ="navList">
                    <li class="navItem">
                        <a class="navLink" href="">الأفلام</a></li>
                        <li class="navItem">
                            <a class="navLink" href="">الأوسكار</a></li>
                    <li  id="logo" class="navItem">
                            <a href="home.html"> <img src="Photos/logo.png" alt="websiteLogo" width="90" height="50"> </a>
                        </li>
                        <li class="navItem">
                            <a class="navLink" href="">المتحف</a></li>
                            <li class="navItem">
                                <a class="navLink" href="">نبذة</a></li>
                </ul>
            </nav>
            
            <div class="mainSection">
                <h3 class="path"><a class="home" href="home.html">الرئيسية</a>/الأفلام </h3>
                <h1 class="title">أفلام جيبلي</h1>
            </div>


            <div class="cards">
                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/2.jpg" alt="حينما كانت مارني هناك" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/3.jpg" alt="قبر اليراعات" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/4.jpg" alt="مملكة الأحلام والجنون " class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f1.png" alt="المخطوفة" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f2.png" alt="جاري توتورو" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f3.png" alt="الأميرة مونونوكي" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f4.png" alt="بونيو على جرف البحر" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f5.png" alt="قلعة هاول المتحركة" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f6.png" alt="المقترضة آرييتي" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f7.png" alt="همس القلب" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f8.png" alt="من أعلى تلة الخشخاش" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f9.png" alt="عودة القط" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f10.png" alt="أمواج المحيط" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f11.png" alt="حكايات من أراضي البحار" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f12.png" alt="قلعة في السماء" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f13.png" alt="بوركو روسو" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f14.png" alt="ناوسيكا أميرة وادي الرياح" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f15.png" alt="حكاية الأميرة كاغويا" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f16.png" alt="جيراني من عائلة يامادا" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f17.png" alt="كيكي لخدمة التوصيل" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f18.png" alt="مهب الريح" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f20.png" alt="حرب الراكون" class="card-img">
                        </a>
                    </div>

                    <div class="card">
                        <a href="">
                        <img src="Photos/movies/f21.png" alt="مطر الذكريات" class="card-img">
                        </a>
                    </div>

                
            </div>

       
        </div>

        <?php
  
        include 'footer.php';

        ?>


    </body>

</html>
