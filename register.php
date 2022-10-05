<!-- this is the general page users will use to login -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | New User Register</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <meta charset="UTF-8" />
    <meta name="author" content="Aziah Miller" />
    <!-- <script src="scripts/script.js" defer></script> -->
</head>

<!--Top navigation menu-->

<?php require_once "inc/header.inc.php"; ?>

<body>
    <div class="AccountPage">
        <div class="Container">
            <div class="row">
                <div class="FormContainer registration_form">
                    <div class="FormBTN">
                        <!-- <span> -->
                        <h2>Enter your Details To Join</h2>
                        <br>
                        <h4>Registering will only take a minute!</h4>
                        <br>
                        <!-- </span> -->
                        <form action="login.php">
                            <span class="sideBySide">
                                <input class="left" type="text" placeholder="First name" required>
                                <input class="right" type="text" placeholder="Last name" required>
                            </span>
                            <input type="email" placeholder="Email address" required>
                            <div class="tooltip">Tips for a secure password?
                                <span class="tooltiptext">
                                <ul>
                                    <li>Include numbers, symbols, and both uppercase and lowercase.</li>
                                    <li>No personal details.</li>
                                    <li>Use a unique password for every site.</li>
                                </ul>    
                                </span>
                            </div>
                            <input type="password" placeholder="Password" required>
                            <span class="sideBySide">
                            <label class="left" for="birthday"><br>Birthday:</label>
                            <input class="right" type="date" id="birthday" name="birthday">
                            </span>
                            <button type="submit" class="BTN login_button register_button">Next</button>
                        </form>
                    </div>

</body>

</html>