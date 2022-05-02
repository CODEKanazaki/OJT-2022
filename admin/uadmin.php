<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/styles.css" />
    <script src="https://kit.fontawesome.com/3f713e3efd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/uadmin.css" />
    <title>Contact</title>
</head>

<body>
    <div id="announcement">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <header>
        <img src="../images/bc_logo_text.png" alt="Logo" />
        <button id="navicon" onclick="openNav()">
            <i class="fa-solid fa-bars fa-lg"></i>
        </button>
        <div id="navmenu1" class="navmenu hide">
            <a href="index.php">Home</a>
            <a href="explore.html">Explore</a>
            <a href="rewards.html">Rewards</a>
            <a href="about.html">About</a>
            <a href="contact.html" class="active">Contact</a>
        </div>
    </header>

    <div class="container">
        <div id="login-div" class="content">
            <h1>Left Side</h1>
            <form>
                <label for="username">Username </label>
                <input id="username" type="text" />
                <br />
                <label for="pass">Password </label>
                <input id="pass" type="text" />
                <br />
                <button type="submit">Login</button>
            </form>
        </div>
        <div id="login-google-div" class="content">
            <h1>Right Side</h1>

        </div>
    </div>

    <footer>
        <div>
            <p>© 2022 Bueno Central</p>
            <p>Privacy Policy</p>
        </div>
    </footer>
    <script>
        const openNav = () => {
            var x = document.getElementById("navmenu1");
            if (x.className === "navmenu") {
                x.className += " hide";
            } else {
                x.className = "navmenu";
            }
        };
    </script>
</body>

</html>