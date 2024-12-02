<?php
require 'config.php';
class connect{
public $user,$pass;


private  function check_login($user,$pass){

$khaleds= new db;
$kha=$khaleds->retrn();

if(!empty($user)){
if(!filter_var($user, FILTER_VALIDATE_EMAIL)){

    $khlaedd= $kha->query("SELECT * FROM user WHERE  `user_name`='".$user."'");

        $row    =   $khlaedd->fetch_assoc();

        if($user    ==  $row['user_name']){

            echo $row['email'];
            if( $pass    ==  $row['user_pass']){
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = 30*60+time();
                $_SESSION['username'] = $row['user_name'];
                header('Refresh: 1; URL = index.php');
    
            }else{
    
                echo "خطأ فى كلمة السر";
    
          }



        }else{
    
            echo "user name or Phone num not found";
        }    



}elseif(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$user)){
    
   //     echo  $row['user_pass'];
   $khlaedd= $kha->query("SELECT * FROM user WHERE   `email`='".$user."' ");

   $row    =   $khlaedd->fetch_assoc();

   if($user    ==  $row['email']){

       //echo $row['email'];
       if($pass==$row['user_pass']){
           $_SESSION['valid'] = true;
           $_SESSION['timeout'] = 30*60+time();
           $_SESSION['username'] = $row['user_name'];
           header('Refresh: 1; URL = index.php');

       }else{

           echo "خطأ فى كلمة السر";

       }

   }else{

       echo "this email not found";
   }          



    


}else{

        echo "خطأ فالاسم او البريد";

      }
}}
public function chek_up_db($user,$pass){

self::check_login($user,$pass);
}


public function home(){

$sql="SELECT * FROM `posts` WHERE `user_id`";
$khaa       =   new db;
$kha        =   $khaa->retrn();
$khlaeddd   =   $kha->query($sql);
$khlaed_row =   $khlaeddd->fetch_assoc();

$jj=$khlaeddd->fetch_all(); 
//echo "</pre>";
// print_r(count($jj))."</pre>";
//echo "</pre>";
$gg = count($jj)+1;
//print_r($gg);
for($x = 0; $x <= $gg; $x++){

    echo $jj[$x];


}
    foreach( $khlaed_row as $lolo=>$lola ) {

        //echo $lola."= ".$lolo."</br>";

    }

//echo $khlaed_row['id'];

}
}
?>