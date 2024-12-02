<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
@include('layout.header')
<div class="home-pic">
<p><h3>Facebook helps you connect and share with the people in your life.</h3></p>
<img src="view/img/GwFs3_KxNjS.png"/>
</div>
<div class="reg">
	<h1>Create  an account </h1>
    <p>It's free and always will be.</p>
<table>			
                  <form action="/regi" method="POST">
                    @csrf
        <tr>
        	<td>   <input type="text" id="fname" name="firstname" placeholder="Your name..">
			</td>
            <td>    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
			</td>
        </tr>
        <tr>    	
            <td colspan="2"><input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="E-mail@ adress"/> 
            </td>
         </tr>        
 		  <tr>
          	<td>	<input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="Enter password"/>
			 <td>	<input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="Confirm password"/>
			 </td>
             </tr>
             	<tr><td colspan="2" style="font-size:12px; color:#666; margin:10px;">By clicking Create an account, you agree to our Terms and confirm that you have read our Data Policy, including our Cookie Use Policy. You may receive SMS message notifications from Facebook and can opt out at any time.</td></tr>
			<tr>
            	<td colspan="2">
                <input class="btn-signup" type="submit" value="Creat an account" name="regi"/> 
				</td>
            </tr>    	
			</form>
            
		</div>
		
	</div>
</table>
</div>  

<body>
</body>
</html>