<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <!-- Register -->
    <div class="container" id="signUp" style="display: none">
        <h1 class="form-title">Register</h1>
        <form action="register.php" method="post" class="form_reg">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input class="input_reg" type="text" name="fName" id="fName" placeholder="First Name" required />
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input class="input_reg" type="text" name="lName" id="lName" placeholder="Last Name" required />
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input class="input_reg" type="email" name="email" id="email" placeholder="Email" require />
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input class="input_reg" type="password" name="password" id="password" placeholder="Password"
                    required />
                <label for="password">Password</label>
            </div>
            <input class="input_reg" type="submit" class="btn" value="Sign Up" name="signUp" />
        </form>
        <p class="or">---------- or ----------</p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Alread have an account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <!-- Sign in -->
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form action="register.php" method="post" class="form_reg">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input class="input_reg" type="email" name="email" id="email" placeholder="Email" require />
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input class="input_reg" type="password" name="password" id="password" placeholder="Password"
                    required />
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="">Recover Password</a>
            </p>
            <input class="input_reg" type="submit" class="btn" value="Sign In" name="signIn" />
        </form>
        <p class="or">---------- or ----------</p>
        <div class="icon">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Dont Have an account?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>