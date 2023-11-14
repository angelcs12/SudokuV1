<?php
require_once 'global.php';
require_once 'Model/model.php';
require_once 'View/view.php';

// init html
openHeader();

// start sudoku
sudoku();

// close html
closeHeader();

function sudoku(){
    
    $initialBoard = getInitialBoard();
    showBoard($initialBoard);
    
    $gameBoard = getGameBoard();
    showBoard($gameBoard);
    
    copyBoard($initialBoard, $gameBoard);
    showBoard($gameBoard);    
}


