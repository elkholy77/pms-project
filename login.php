<?php
include 'inc/header.php';
// include 'core/functions.php';
?>
<div class="container" style="max-width: 500px; margin: 40px auto;">
    <h2 style="text-align:center;">تسجيل الدخول</h2>
    <form method="post" action="handler/login_handler.php" style="background: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.07);">
        <div style="margin-bottom: 18px;">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" class="form-control" required style="width:100%; padding:8px;">
        </div>
        <div style="margin-bottom: 18px;">
            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" class="form-control" required style="width:100%; padding:8px;">
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%; background:#007bff; color:#fff; padding:10px; border:none; border-radius:4px;">دخول</button>
    </form>
    <div style="text-align:center; margin-top:15px;">
        <a href="register.php">ليس لديك حساب؟ سجل الآن</a>
    </div>
</div>
<?php
include 'inc/footer.php';
?>
