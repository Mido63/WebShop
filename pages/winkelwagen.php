<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->
    <script src="../scripts/main.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>Winkelwagen</title>
</head>
<body>
    <div class="container"><!-- container -->
        <div class="inner-container"><!-- inner container div -->
            <div class="header"> <!-- header div -->
                <div class="logo"> <!-- logo div -->
                    <img src="../images/gm-logo.png" class="logo-img">
                </div>
                <div class="login"> <!-- login div -->
                    <form method="post" name="login-form" >
                        <h4>Login</h4>
                        <input type="text" placeholder="Gebruikersnaam" width="50px">
                        <input type="password" placeholder="Wachtwoord" width="50px">
                        <br />
                        <input type="checkbox" name="checkbox" id="login-checkbox" value="0">
                        <label for="login-checkbox">Onthoud mij</label>
                        <a href="#">Wachtwoord vergeten?</a>
                        <a href="registreren.php">Registreert</a>
                        <br />
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
            <div class="main-nav"><!-- navigatie div -->
                <nav class="main-navbar">
                    <ul>
                        <li>
                            <a href="product.php" type="button">Product</a>
                        </li>
                        <li>
                            <a href="over-ons.php" type="button">Over ons</a>
                        </li>
                        <li>
                            <a href="producten-overzicht.php" type="button">Productoverzicht</a>
                        </li>
                        <li>
                            <a href="producten-overzicht-nav.php" type="button">Productoverzicht + nav</a>
                        </li>
                        <li>
                            <a href="registreren.php" type="button">Registreren</a>
                        </li>
                        <li>
                            <a href="winkelwagen.html" type="button">Winkelwagen</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="wrapper"><!-- wrapper div -->
                <div class="sidebar-right"><!-- sidebar div -->
                    <div class="adverticement"><!-- advertencies div -->

                    </div>
                </div>
                <div class="main-content"><!-- main content div -->


                </div>
                <div class="cb"></div><!-- clear both div -->
                <div class="footer"><!-- footer div -->
                    <p>&copy; Mike Dorsman, Arnold Karels</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>