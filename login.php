<?php include('includes/header.php'); ?>
    <!-- Custom styles created by group 4-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <section>
    <div id="page">
      <div class="col-md-4">
        <h4 class="text-uppercase mb-4">Thank you for registering to SportPort!</h4>
        <p class="lead mb-0">Please login below to join the action!</p>
      </div>
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
        <script src="js/validation.js"></script>
    </div>
</section>

<?php include('includes/footer.php'); ?>
