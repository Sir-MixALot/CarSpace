<?php
session_start();
if($_SESSION['user']){
    header('Location: main.php');
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="img/icon.png">
    <title>Welcome</title>
</head>

<body>
    <h2>Добро пожаловать!</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="vendor/signup.php">
                <h1>Create Account</h1> 
                <input type="text" name="login" placeholder="Login" required pattern="(?=^.{1,}$)^[а-яА-ЯёЁa-zA-Z0-9]+$" title="Only letters and numbers! At least 1 symbols!" />
                
                <input type="email" name="email" placeholder="Email" required />
               
                <input type="password" id="password" name="password" placeholder="Password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="Must be at least 8 symbols and upper case symbols!"
                />
                <input type="password" id="confirm-pass" name="confirm-pass" placeholder="Confirm password" required />
                <button type="submit" id="btn1">Sign Up</button>
                <script src="js/form_validation.js"></script>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="vendor/signin.php">
                <h1>Sign in</h1>
                <input type="text" name="login1" placeholder="Login" required />
                <input type="password" name="password1" placeholder="Password" required />
                <button type="submit" id="btn2">Sign In</button>
                <a href="new_pass.php">Forgot your password?</a>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <?php
                if($_SESSION['message']){
                    echo '<p id="message"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
                if($_SESSION['message3']){
                    echo '<p id="message3"> ' . $_SESSION['message3'] . ' </p>';
                }
                unset($_SESSION['message3']);
            ?>
    <script src="js/form.js"></script>
</body>

</html>