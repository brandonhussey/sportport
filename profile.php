<?php include('includes/header.php'); ?>

<section id="Leagues">
    <div class="jumbotron" id="LeaguesHeader">
      <h2>Profile</h2>
    </div>
</section>
        <div id= "profile">
            <img id="pp" class='img-fluid' src='img/person.png' alt='$profile logo'>
            <?php
                echo "<h3>Name: $firstName $lastName</h3>";
                echo "<h3>Date of Birth: $dob</h3>";

            ?>
            <a href="myteams.php" type='button' class='btn btn-info'>My Teams</a>
        </div>
<!--    </section>-->
<?php include('includes/footer.php'); ?>
