<div class="footer-above">
            <div class="outer-box">
                <p class="mail-title"> كن من أصدقائنا</p>
                <p class="mail-sub-title">
                اشترك الآن بالنشرة البريدية مجانًا لتصبح ضمن 
<?php 
       $conn = mysqli_connect("localhost","root","","emailusers");
       $query = mysqli_query($conn,"SELECT  MAX(id) FROM useremail  ");
$data = mysqli_fetch_array($query);
echo $data[0];
        
?>
              صديق 
                </p>
            <div>
                <form method="POST" action="" >
                  <input class="email-box" name="mail" type="email" placeholder="اكتب بريدك الإلكتروني هنا " >
                  <br>
                  <input class="submit-box" type="submit" value="اشتراك" name="sub" >
              </form>
            </div>

    
        </div>
        
        <?php
                include 'goup.php';        
       $conn = mysqli_connect("localhost","root","","emailusers");

           if(isset($_POST['sub']))
                    {
                     $m= $_POST['mail'];
                     $sql = "INSERT INTO useremail(email) VALUES ('$m')";
                     mysqli_query($conn,$sql);                   
header('Location:home.php');
                       die();
                    }
                   
?>
    
        </div>
        <div class="footer-below">
          <a href="http://www.ghibli.jp/" target="_blank"> <img src="Photos/stdioLogo.png" alt="شعار استديو جيبلي الرسمي"></a> 
            <p>جميع حقوق الصور والرسومات محفوظة  لاستديو جيبلي2020 ©. ‭</p>
       </div>
      
   