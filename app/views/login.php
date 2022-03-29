<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../app/assets/stylesheets/style.css">
    <link rel="stylesheet" href="../app/assets/stylesheets/mediaQuery.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Login</title>
</head>

  </div>
  <div class="login-modal-containe" id="login-modal-container" >

<div class="login-modal-content">
    <button class="close-login-modal" onclick="hideloginModal()">x</button>
    <h3 class="login-caption">تسجيل الدخول</h3>

    <hr class="form-hr">
    <?php //print_r($data);?>
<body style=" background-color: rgba(0,0,0,0.3);">
  <div class="container ">
  <?php if(isset($data)) { ?>
               <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong><?php echo $data['type'] ?></strong>  <?php echo $data['message'] ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
 
  <?php } ?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>