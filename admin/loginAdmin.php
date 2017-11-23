<!DOCTYPE html>
<html >
    <head>

        <!--= Basic configuration --> 
        <meta charset="UTF-8">
        <title>Login page</title>

        <!--= Database Configuration --> 
        <?php require('../dbcon.php'); ?>

        <!--= Load CSS and Font --> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,900' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <link rel="stylesheet" href="styles.css">

    </head>
    <body>
    <div class="back"></div>
    
        <!--= Login Form Begin --> 
        <div class="registration-form">
            <header>
                <h1>Login</h1>
                <p>To update the database, you need to login first</p>
            </header>
            <form method="post" action="loginAdmin2.php" class="form">
                <div class="input-section email-section">
                    <input class="email" type="text" name="username" placeholder="Username" required autocomplete="off"/>
                    <div class="animated-button">
                        <span class="icon-paper-plane"><i class="fa fa-user"></i></span>
                        <span class="next-button email"><i class="fa fa-arrow-up"></i>
                        </span>
                    </div>
                </div>
                <div class="input-section password-section folded">
                    <input class="password" name="password" type="password" value= "" placeholder="Password" required/>
                    <div class="animated-button">
                        <span class="icon-lock"><i class="fa fa-lock"></i></span>
                        <span class="next-button password"><i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="input-section repeat-password-section folded">
                    <input class="repeat-password" type="text" placeholder="Say hello first :D"/>
                    <div class="animated-button">
                        <span class="icon-repeat-lock"><i class="fa fa-lock"></i></span>
                        <span class="next-button repeat-password"><i class="fa fa-paper-plane"></i></span>
                    </div>
                </div>
                <div class="success"> 
                    <input type="submit" name="login">
                </div>
            </form>
            <!--= Login Form End --> 
        </div>

        <!--= Load Javascript --> 
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script  src="index.js"></script>
    </body>
</html>           