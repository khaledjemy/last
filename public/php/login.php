<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style/style.css">
<title></title>
<!--- login --->

</head>
<body>
    
    <div class="login-box">
        <form action="" method="post">
            <ul>
                <li><input type="text" placeholder="اسم المستخدم او البريد الاليكترونى" name="user_login" autocomplete="off"/></li>
                <li><input type="password" placeholder="كلمة السر (المرور)" name="pass_login"></li>
                <li><input type="submit" value="تسجيل الدخول" name="log_in"></li>
            </ul>
            <div><a href="#" >هل نسيت كلمة السر؟</a></div>
            <hr>
            <div><input type="button" value="إنشاء حساب جديد"></div>
        </form>
    </div>
<?php   
        require'class/validate.php';
        require'class/connect.php';
if(isset($_POST['log_in'])){

$check = new validat;
$checklo = $check->check_login($_POST['user_login'],$_POST['pass_login']);
   // $_POST['user_login']   ."---".  $_POST['pass_login'];
if($checklo==true){

    $kk= new connect;
    $kk->chek_up_db($_POST['user_login'],$_POST['pass_login']);

}
};
require('php/footer.php');
    ?>
</body>


</html>