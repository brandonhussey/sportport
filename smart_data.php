<?php
    require_once('php/dto/user.php');
    require_once('php/dto/game.php');
    require_once('php/database.php');
    $conn = connect_db();
    $max_users = 25;
    // Create dummy users
    for($i = 1; $i < $max_users; $i++){
        $user = new User("e{$i}@gmail.com", "first{$i}", "last{$i}", "1994/05/01");
        $user->init_password("pass{$i}");
        create_user($conn, $user);
        $user_ids[$i] = get_user_by_email($conn, "e{$i}@gmail.com")->userID;
    }

    // Create dummy sports
    $sports = array("Soccer", "Basketball", "Baseball", "Volleyball", "Hockey", "Lacrosse");
    $sport_ids = array();
    for($i = 0; $i < sizeof($sports); $i++){
        create_sport($conn, $sports[$i]);
    }
    $sport_counter = 1;
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            // Create dummy leagues
            create_league($conn, "{$sports[$i]}_L{$j}", $sport_counter);
        }
        $sport_counter++;
    }
    $league_counter = 1;
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            for ($k = 0; $k < 4; $k++) {
                // Create dummy teams
                create_team($conn, "{$sports[$i]}_L{$j}_T{$k}", $league_counter);
            }
            $league_counter++;
        }
    }

    $team_counter = 1;
    $user_counter = 1;
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            for ($k = 0; $k < 4; $k++) {
                // Create dummy teams
                if($i + 1 > $max_users) {
                    break;
                }
                create_team_membership($conn, $team_counter, $user_counter);
                $user_counter++;
            }
            $team_counter++;
        }
    }

    // Populate games table
    $games = [];
    $game_counter = 0;
    $team_a_id = 1;
    $team_b_id = 2;
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            $games[$game_counter] = new Game($team_a_id, $team_b_id, 1, 2, "1994/05/01");
            $game_counter++;
            $team_a_id += 2;
            $team_b_id += 2;
        }
    }

    for($i=0;$i<sizeof($games);$i++){
        create_game($conn, $games[$i]);
    }
