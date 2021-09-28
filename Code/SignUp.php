<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1"/>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Pemilihan Tempat</title>
        <link rel = "stylesheet" href = "bootstrap/css/bootstrap.css">
        <link rel = "stylesheet" href = "css/styleSignUp.css">
    </head>
    <div class="header-background">
    <?php session_start();
	$_SESSION["pageName"] = "login";?> 
        <?php include('header.php'); ?>
    
    <body>
        <div class="container" id="container" style="margin-top: 5%;">
        <div class="form-container sign-up-container">
            <form class = "formSignUp" method="post" action="signupproses.php">
                <h1>Create Account</h1>
                <input type="text" name="name" placeholder="Name" style="margin-top: 10px" required/>
                <input type="email"  name="email" placeholder="Email" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <button style="margin-top: 5px">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form class = "formLogin" method="post" action="loginproses.php">
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email" style="margin-top: 10px" required />
                <input type="password" name="password" placeholder="Password" required />
                <button style="margin-top: 5px">Sign In</button>
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
                    <h1>Hello!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
        

      <script>
            const signUpButton = document.getElementById('signUp');
            const signInButton = document.getElementById('signIn');
            const container = document.getElementById('container');

            signUpButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

            signInButton.addEventListener('click', () => {
                container.classList.remove("right-panel-active");
            });

            function onlyNumberKey(evt) { 
                // Only ASCII charactar in that range allowed 
                var ASCIICode = (evt.which) ? evt.which : evt.keyCode 
                if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) 
                    return false; 
                return true; 
            }

            $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
            }); 
      </script>
  </body>
    
</html>




