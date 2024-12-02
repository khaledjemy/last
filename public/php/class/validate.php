<?php
class validat{

public $user_or_email;
public $passwordd ;





public   function check_login($user_or_email,$passwordd){

if(!filter_var($user_or_email, FILTER_VALIDATE_EMAIL) and !preg_match("([a-z 0-9](?=.{3})(?!.{50}))", $user_or_email)){

	echo "E-mail is not valid"."</br>";
		"Numbers from 0 - 9"."</br>".
		"No capital letters"."</br>".
		"no special symbols at all"."</br>".
		"min of 6 characters"."</br>".
		"max of 10 characters" ."</br>";
		return false;

}else{	
	if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$passwordd)) {
    
		echo 	'at least one lowercase char'.'</br>'.
				'at least one uppercase char'.'</br>'.
				'at least one digit '.'</br>'.
				'at least one special sign of @#-_$%^&+=§!?'.'</br>'.
				'max20 least 8 in password';
return false;
}
return true;
}
}
};
?>