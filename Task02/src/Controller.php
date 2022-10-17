<?php
namespace kiryuhinal\tic_tac_toe\Controller;
use function kiryuhinal\tic_tac_toe\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>