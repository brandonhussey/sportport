<?php include('includes/header.php'); ?>

<section style=>
  <div class="jumbotron" id="LeaguesHeader">
    <h1>Teams</h1>
  </div>
  <div class="info">
    <table class="table">
      <thead>
        <tr>
          <th>Team Name</th>
        </tr>
      </thead>
    <tbody>
    <?php
        $conn=connect_db();
        $leagueID = $_GET['leagueid'];
        $sport_name = $_GET['sportname'];
        $teams = get_teams_byleague($conn, $leagueID, $sport_name);
        foreach($teams as $team){
            $team_id = $team["TeamID"];
            $team_name = $team["TeamName"];
            echo "<tr>
                    <td><div class='sportPicture col-md-1 col-lg-1'><img class='img-fluid' src='img/sports/$sport_name.png' alt='$sport_name'></div></td>
                    <td>$team_name</td>
                    <td><a href='team.php?sport=$sport_name&leagueid=$leagueID&teamid=$team_id' type='button' class='btn btn-info'>Team Info</a></td>
                  </tr>";
        }
    ?>
      </tbody>
    </table>
  </div>
</section>

<? include('includes/footer.php'); ?>
