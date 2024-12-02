<html>
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="style/style.css">
<title></title>
<!--- login --->

</head>
<body>
    
    <div class="login-box">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <ul>
                <li><input type="text" placeholder="اسم المستخدم او البريد الاليكترونى" name="email" autocomplete="off"/></li>
                @error('email')
                <strong>{{ $message }}</strong>
                @enderror
                <li><input type="password" placeholder="كلمة السر (المرور)" name="password"></li>
                @error('password')
                <strong>{{ $message }}</strong>
                @enderror
                <li><input type="submit" value="تسجيل الدخول" name="login"></li>
            </ul>
            <div><a href="#" >هل نسيت كلمة السر؟</a></div>
            <hr>
            <div><input type="button" value="إنشاء حساب جديد"></div>
        </form>
    </div>

</body>


</html>