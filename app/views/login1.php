<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login </title>
</head>
<body>
<div class="login-modal-container" id="login-modal-container" >

<div class="login-modal-content">
    <button class="close-login-modal" onclick="hideloginModal()">x</button>
    <h3 class="login-caption">تسجيل الدخول</h3>
    <hr class="form-hr">
    <form id="login" action="#">
        <div class="login-input-container">
            <input class="login-email" type="email" placeholder="البريد الإلكتروني أو رقم الجوال">
        </div>
        <div class="login-input-container">
            <input type="password" class="login-pass" placeholder="كلمة السر"><button
                class="forgot-pass">نسيت ؟</button>
        </div>
        <div class="login-input-container">
            <button class="login-btn">تسجيل الدخول</button>
        </div>
        <div class="dont-have-account-container">
            <span class="dont-have-account">ليس لديك حساب؟</span>
            <button class="create-new-account" onclick="showSigninModal()">إنشاء حساب جديد</button>
        </div>
    </form>


</div>
</div>
</body>
</html>