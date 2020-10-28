<?php include('includes/header.php'); ?>
    <!-- Custom styles created by group 4-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <section>
    <div id="page">
        <section id="loginForm">
        <h3>Login</h3>
            <form method="post" id="login" action="php/processing.php">
                <fieldset>
                    <label for="loginEmail">Email:
                        <input type="text" maxlength="32" name="loginEmail" id="loginEmail">
                    </label>
                    <label for="loginPassword">Password:
                        <input type="password" maxlength="20" name="loginPassword" id="loginPassword">
                    </label>
                </fieldset>
                <input type="submit" name="formSubmit" class="formSubmit" id="submitLogin" value="Login">
            </form>
        </section>
        <section id="registrationForm">
            <h3>Register</h3>
            <form method="post" id="registration" action="php/processing.php" onsubmit="return validateForm()">
                <fieldset>
                    <label for="firstName">First Name:
                        <input type="text" maxlength="32" name="firstName" id="firstName">
                    </label>
                    <div id="firstNameError" class="error"></div>

                    <label for="lastName">Last Name:
                        <input type="text" maxlength="32" name="lastName" id="lastName" aria-required="true" required>
                    </label>
                    <div id="lastNameError" class="error"></div>

                    <label for="dateOfBirth">Date of Birth:
                        <input type="date" maxlength="32" name="dateOfBirth" id="dateOfBirth" aria-required="true" required>
                    </label>
                    <div id="dateOfBirthError" class="error"></div>

                    <label for="email">E-mail:
                        <input type="text" maxlength="32" name="email" id="email" aria-required="true" required>
                    </label>
                    <div id="emailError" class="error"></div>

                    <label for="password">Password:
                        <input type="password" maxlength="20" name="password" id="password">
                    </label>
                    <div id="passwordError" class="error"></div>

                    <label for="confirm">Confirm Password:
                        <input type="password" maxlength="20" name="confirm" id="confirm">
                    </label>
                    <div id="confirmError" class="error"></div>
                </fieldset>
                <input type="submit" name="formSubmit" class="formSubmit" id="submit" value="Register">
            </form>
        </section>
        <script src="js/validation.js"></script>

    </div>
</section>

<?php include('includes/footer.php'); ?>