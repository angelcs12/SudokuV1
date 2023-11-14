<?php
require_once 'data.php';

function getInitialBoard() {
    global $initialBoard;
    return $initialBoard;
}

function getSolvedBoard() {
    global $solvedBoard;
    return $solvedBoard;
}

function getGameBoard() {
    global $gameBoard;
    return $gameBoard;
}

function copyBoard($sourceBoard, &$targetBoard){
    for($i = 0; $i < 9; $i++){
        for($j = 0; $j < 9; $j++){
            $targetBoard[$i][$j] = $sourceBoard[$i][$j];
        }
    }
}

function addNumber($row, $col, $number, $board){
    
}