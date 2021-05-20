
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Welcome Tanimo</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="../../controller/UserC.php" method="POST">
            <h1>Create Account</h1>
            <span>or use your email for registration</span>
            <input type="text" placeholder="Name" name="nom"/>
            <input type="email" placeholder="Email" name="email" id="em" onblur="validEm()"/>
            <input type="password" placeholder="Password" name="pwd" id="pass" onblur="validPw()"/>
            <input type="text" placeholder="adresse" name="adr" />
            <input type="text" placeholder="phone number" name="tel" />
            <input type="file" placeholder="picture" name="pic" />
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="../../controller/userC.php" method="post">
            <h1>Sign in</h1>

            <span>or use your account</span>
            <input type="email" placeholder="Email" name="email"/>
            <input type="password" placeholder="Password" name="password"/>

            <button type="submit" name="login">Sign In</button>
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


<script src="script.js">
</script>
</body>
</html>