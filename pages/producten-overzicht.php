<!DOCTYPE html>
<html lang="en">
<head>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->
    <script src="../scripts/main.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <title>Producten overzicht</title>
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
                            <a href="winkelwagen.php" type="button">Winkelwagen</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="wrapper"><!-- wrapper div -->
                <div class="sidebar-left"><!-- sidebar links div -->
                    <div>
                        <div class="sidebar-left-menu">
                            <div class="sidebar-left-menu-items">
                                <a href="#">Home</a>
                                <br/>
                                <hr>
                                <strong>Games</strong>
                                <br/>
                                <div style="padding-left: 10px;">
                                    <a href="#">Alle games</a>
                                    <a href="#">Nieuw binnen</a>
                                    <a href="#">Pre-orders</a>
                                    <a href="#">Aanbiedingen</a>
                                    <a href="#">Tweedehands games</a>
                                </div>
                                <hr>
                                <strong>Accessoires</strong>
                                <br/>
                                <div style="padding-left: 10px;">
                                    <a href="#">Alle accesoires</a>
                                    <a href="#">Controllers</a>
                                    <a href="#">Headsets</a>
                                </div>
                                <hr>
                                <strong>Spelcomputers</strong>
                                <br/>
                                <div style="padding-left: 10px;">
                                    <a href="#">Alle spelcomputers</a>
                                    <a href="#">Nintendo</a>
                                    <a href="#">Playstation</a>
                                    <a href="#">Xbox</a>
                                </div>
                                <hr>
                                <strong>Overig</strong>
                                <br/>
                                <div style="padding-left: 10px;">
                                    <a href="#">Blu-ray films</a>
                                    <a href="#">Strategy guides</a>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar-right"><!-- sidebar rechts div -->
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