<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        <title>Login page</title>
        <?php require('../dbcon.php'); ?>
        <title>Login Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="login">
            <form method="post" action="loginInvestor2.php">
                <h2>Log In</h2>
                <fieldset>
                    <input type="text" name="username" 
                           value="<?php if(isset($_COOKIE["member_login"])){echo $_COOKIE["member_login"]; } ?>" placeholder="username" required><br \><br \>
                    <input name="password" type="password" 
                                     value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"]; } ?>"
                                     placeholder="password" required>
                    <!--<p class="remember_me">
                        <label>
                            <input type="checkbox" name="remember_me" id="remember_me" <?php /*if(isset($_COOKIE["member_login"])) { ?> checked <?php } */?> />Remember me 
                        </label>
                    </p>-->
                </fieldset>
                <input type="submit" style="cursor: pointer" value="Log In" />
                <div class="utilities">
                    <a href="recovery.html">Forgot Password?</a>
                    <a href="signup.html">Sign Up &rarr;</a>
                </div>
            </form>
        </div>
    </body>
</html>
