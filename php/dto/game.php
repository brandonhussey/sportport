<?php

class Game{ //Stores game information
    public $gameID;
    public $aTeamID;
    public $bTeamID;
    public $aTeamScore;
    public $bTeamScore;
    public $date;

    public function __construct($aTeamID, $bTeamID, $aTeamScore, $bTeamScore, $date){
        $this->aTeamID = trim($aTeamID);
        $this->bTeamID = trim($bTeamID);
        $this->aTeamScore = trim($aTeamScore);
        $this->bTeamScore = trim($bTeamScore);
        $this->date = trim($date);
    }
}

function game_db_to_dto($game_db){
    $game_dto = new Game($game_db['AteamID'], $game_db['BteamID'],
                        $game_db['AteamScore'], $game_db['BteamScore'], $game_db['Date']);
    $game_dto->gameID = $game_db['GameID'];
    return $game_dto;
}

