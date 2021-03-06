<!DOCTYPE html>
<html>

<head>
    <title>User login page</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/uadmin.css">
</head>

<body class="bg">
    <div id="announcement">
        <p>Annoucement long sentence. The quick brown fox jumps over the laze dog.</p>
    </div>
    <header>
        <img src="./images/bc_logo_text.png" alt="Logo" />
        <button id="navicon" onclick="openNav()">
            <i class="fa-solid fa-bars fa-lg"></i>
        </button>
        <div id="navmenu1" class="navmenu hide">
            <a class="navitem" href="index.html">Home</a>
            <a class="navitem" href="explore.html">Explore</a>
            <a class="navitem" href="rewards.html">Rewards</a>
            <a class="navitem" href="about.html">About</a>
            <a class="navitem" href="contact.html">Contact</a>
        </div>
    </header>


    <div class="content">
        <div class="box1">

            <h2>Sign in</h2>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button type="submit">Login</button>


            <label><input type="checkbox" checked="checked" name="remember">Remember me</label>
            <span id="forgotpass" class="psw"><a href="#">Forgot password?</a></span>

        </div>

        <div class="box2">
            <div class="col">
                <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a>
                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Google+
                </a>
            </div>
        </div>

        <!-- <div class="buenologo">
        <img src="../images/bc_logo_text.png">
        </div> -->


        <div class="line">
            <img src="./images/vertical.PNG">
        </div>



    </div>




    <footer>
        <div class="wave">
            <img src="./images/wave.svg">
        </div>
    </footer>

</body>

<script src="" async defer></script>

</html>