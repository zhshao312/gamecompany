<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCompany - Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- navigation -->
    <nav>
        <div class="nav nav__sticky">
            <a href="index.php" class="logo">GameCompany</a>
            <ul>
                <li class=""><a href="index.php">HOME</a></li>
                <li class="nav-dropdown">INFORMATION <span id="icon-dropdown"></span>
                    <ul class="nav-dropdown--contents">
                        <li class=""><a href="#">About Us</a></li>
                        <li class=""><a href="#">Statistics</a></li>
                    </ul>
                </li>
                <li class=""><a href="gamestore.php">GAME STORE</a></li>
                <li class="nav-current"><a href="#">REGISTER</a></li>
                <li class=""><a href="signin.php">SIGN IN</a></li>
                <li class=""><a href="#">START TRIAL</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- register -->
        <section class="section-box">
            <div class="container">
                <h2 class="section-title">Register</h2>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-1-of-2">
                            <div class="input-container">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" placeholder="John" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" placeholder="Doe" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" name="dob" class="input-field__white">
                            </div>
                        </div>
                        <div class="col-1-of-2">
                            <div class="input-container">
                                <label for="user">Username</label>
                                <input type="text" name="user" placeholder="username" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="emal@example.com" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="conf-password">Confirm Password</label>
                                <input type="password" name="conf-password" class="input-field__white">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Register" class="btn">
                </form>
                <div class="signin-register">
                    Have an account? <a href="signin.php">Sign In</a>
                </div>
            </div>
        </section>
    </main>


    <footer>
        <div class="row">
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">THE TEAM</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li>Team Member 1</li>
                            <li>Team Member 2</li>
                            <li>Team Member 3</li>
                            <li>Team Member 4</li>
                            <li>Team Member 5</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">SERVICES</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Free Trial</a></li>
                            <li><a href="gamestore.php">Game Store</a></li>
                            <li><a href="#">Memberships</a></li>
                            <li><a href="#">Latest Game</a></li>
                            <li><a href="#">Share on Social Media</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">INFORMATION</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Sales Statistics</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">ACCOUNT</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Register</a></li>
                            <li><a href="signin.php">Sign In</a></li>
                            <li><a href="#">Account info</a></li>
                            <li><a href="#">Leaderboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <div class="logo footer-logo">&copy;GameCompany</div>
            </div>
        </div>
    </footer>
</body>
</html>
