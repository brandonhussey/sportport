<?php include('includes/header.php'); ?>

    <!-- Header -->
    <header class="title-home masthead bg-primary text-white text-center ">
      <div class="container title-home-margins">
        <h1 class="text-uppercase mb-0">Sport Port</h1>
        <!--<hr class="star-light">-->
        <strike> <img  src='img/anchor3.png' alt='Sport Port Logo - Anchor' id="anchor"> </strike>
        <h2 class="font-weight-light mb-0">6 Sports - 1 Ball - 2 Legs - 1 SportPort</h2>
      </div>
    </header>

    <!-- Sports Grid Section -->
    <section class="sports" id="sports">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Offered Sports</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <?php
                $sports = ['soccer', 'basketball', 'baseball', 'volleyball', 'hockey', 'lacrosse'];

                foreach($sports as $sport) {
                    echo "  <div class='col-md-6 col-lg-4'>
                                <a class='d-block mx-auto' href='leagues.php?sport=$sport'>
                                    <div class='sport-pic'>
                                        <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                                        <h3 class='sport-caption'>$sport</h3>
                                    </div>
                                </a>
                            </div>";
                }
            ?>
        </div>
      </div>
    </section>

<?php include('includes/footer.php'); ?>
