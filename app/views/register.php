<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../app/assets/stylesheets/style.css">
    <link rel="stylesheet" href="../app/assets/stylesheets/mediaQuery.css">
    
    <title>Register</title>
</head>
<body style="  background-color: rgba(0,0,0,0.3);
">
<div class="signin-container">
    
<div class="signin-modal-container2" id="signin-modal-container">
            <div class="signin-content-container">
                <button class="close-signin-modal" onclick="hidesigninModal()">x</button>
               <h3 class="register-caption">إنشاء حساب</h3>
               <hr class="form-hr">
   <?php if(isset($data)){?>            
<?php foreach($data as $error){?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
   <?php echo $error ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php }}?>

         
                <div class="signin-form-container">
                    <form class="signin-form" action="add_user" method="post">

                        <div class="signin-row-container">
                            <input name="phoneNumber"  type="number" class="signin-phonenumber" style="width:100%" type="text" placeholder="رقم الجوال" value = "<?= empty($data['form_values']['phoneNumber'])?"":$data['form_values']['phoneNumber']?>">


                            <!-- <select class="signin-countrycode">
                                <option value="">
                                   
                                رمز البلد

                                </option>

                                <option>
                                    +967
                                </option>

                            </select> -->
                        </div>
                         
                            <!-- <span style="margin-right: 5px;">سوف نرسل لك <span style="font-weight: 600;">رمز التحقق عن طريق رسالة نصية</span></span> -->
                        
                            <div class="signin-input-container" style="margin-top: 8px;">
<!--                                 
                            <input id="#signin-register-code" style="  text-align: center;
                            background-color: #e5e8ee;padding: 15px;" type="number" placeholder="إرسال رمز التحقق" class="">
                            <br> -->

                            <input name="firstName" id="#signin-first-name" type="text" placeholder="الاسم الاول" class="" value = "<?= empty($data['form_values']['firstName'])?"":$data['form_values']['firstName']?>">
                            <br>

                            <input name="lastName" id="#signin-last-name" type="text" placeholder="اسم العائلة" class="" value = "<?= empty($data['form_values']['lastName'])?"":$data['form_values']['lastName']?>">
                            <br>

                            <input name="email" id="#signin-email" type="email" placeholder="البريد الإلكتروني" class="" value = "<?= empty($data['form_values']['email'])?"":$data['form_values']['email']?>">
                            <br>

                            <input name="password" id="#signin-pass" type="password" placeholder="كلمة السر" class="">
                            <br>
                            <input id="#signin-retype-pass" type="password" placeholder="تأكيد كلمة السر" class="">
                            
                           </div>
                          
                                <label class="signin-checkbox-container">
                                    <span class="signin-agree">أوافق على  </span><a href="" style="text-decoration: none;font-size: 15px;">الشروط والأحكام</a>
                                    <input type="checkbox">
                              
                                    <br>
                                    <span class="signin-checkmark"></span>
                                  </label>

                                  <label class="signin-checkbox-container">
                                    <span class="signin-register-news">التسجيل للانظمام للنشرة البريدية</span>
                                    <input type="checkbox">
                                  
                                    <span class="signin-checkmark"></span>
                                  </label>
                            
                          
                    
                            <button type="submit" name="submit" class="signin-create-account">إنشاء حساب</button>
<div class="signin-have-account">
<span>لديك حساب؟</span><a href="#" style="text-decoration: none; color: blue;" onclick="showloginModalAgain()"> تسجيل الدخول </a>
</div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>