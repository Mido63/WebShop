<?php
/**
 * Created by PhpStorm.
 * User: Mike Dorsman
 * Date: 24-5-2018
 * Time: 18:43
 */

?>
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
