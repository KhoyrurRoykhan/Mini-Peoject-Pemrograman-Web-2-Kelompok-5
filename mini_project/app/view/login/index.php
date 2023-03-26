<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu_login</title>
    <link rel="stylesheet" href="<?=BASEURL?>/css/style_login.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="<?=BASEURL?>/login/confirm" method="post">
                <h1>Login</h1>
                <hr>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com" id="username" name="username">
                <label for="">Password</label>
                <input type="password" placeholder="Password" id="password" name="password">
                <button type="submit">Login</button>
                <p>
                    <a style="text-decoration:none" href="#">Forgot Password?</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="<?=BASEURL?>/img/image-2.png">
        </div>
    </div>
</body>

</html>