<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tic Tac Toe Game</title>
        <link rel="icon" type="image/ico" href="../../logo/logo.png">
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="game_style.css">        
    </head>
    <body>     
        <div class="upperdiv">
            <h1>Hope you will like the game.</h1>
        </div>
        <div class="container" id="main">
            <h1><p><span id="heading">Tic_Tac_Toe Game</span></p></h1>
            <h1><p><span id="turn">Play</span></p></h1>
            <div class="box" id="box1"></div>
            <div class="box" id="box2"></div>
            <div class="box" id="box3"></div>
            <div class="box" id="box4"></div>
            <div class="box" id="box5"></div>
            <div class="box" id="box6"></div>
            <div class="box" id="box7"></div>
            <div class="box" id="box8"></div>
            <div class="box" id="box9"></div>
        </div>
        <button onclick="replay()">Play Again</button>
        
        <script>
            var turn = document.getElementById("turn"),
                boxes = document.querySelectorAll("#main div"), X_or_O = 0;
            function selectWinnerBoxes(b1,b2,b3)
            {
                b1.classList.add("win");
                b2.classList.add("win");
                b3.classList.add("win");
                turn.innerHTML = b1.innerHTML + " Won Congrat";
                turn.style.fontSize = "40px";
            }
            function getWinner()
            {
                var box1 = document.getElementById("box1"),
                    box2 = document.getElementById("box2"),
                    box3 = document.getElementById("box3"),
                    box4 = document.getElementById("box4"),
                    box5 = document.getElementById("box5"),
                    box6 = document.getElementById("box6"),
                    box7 = document.getElementById("box7"),
                    box8 = document.getElementById("box8"),
                    box9 = document.getElementById("box9");
              if(box1.innerHTML !== "" && box1.innerHTML === box2.innerHTML && box1.innerHTML === box3.innerHTML){
                 selectWinnerBoxes(box1,box2,box3);
              }
              if(box4.innerHTML !== "" && box4.innerHTML === box5.innerHTML && box4.innerHTML === box6.innerHTML)
                 selectWinnerBoxes(box4,box5,box6);
              if(box7.innerHTML !== "" && box7.innerHTML === box8.innerHTML && box7.innerHTML === box9.innerHTML)
                 selectWinnerBoxes(box7,box8,box9);
              if(box1.innerHTML !== "" && box1.innerHTML === box4.innerHTML && box1.innerHTML === box7.innerHTML)
                 selectWinnerBoxes(box1,box4,box7);
              if(box2.innerHTML !== "" && box2.innerHTML === box5.innerHTML && box2.innerHTML === box8.innerHTML)
                 selectWinnerBoxes(box2,box5,box8);
              if(box3.innerHTML !== "" && box3.innerHTML === box6.innerHTML && box3.innerHTML === box9.innerHTML)
                 selectWinnerBoxes(box3,box6,box9);
              if(box1.innerHTML !== "" && box1.innerHTML === box5.innerHTML && box1.innerHTML === box9.innerHTML)
                 selectWinnerBoxes(box1,box5,box9);
              if(box3.innerHTML !== "" && box3.innerHTML === box5.innerHTML && box3.innerHTML === box7.innerHTML)
                 selectWinnerBoxes(box3,box5,box7);
            }
            for(var i = 0; i < boxes.length; i++)
            {
                boxes[i].onclick = function()
                {
                    if(this.innerHTML !== "X" && this.innerHTML !== "O")
                    {
                    if(X_or_O%2 === 0)
                    {
                       console.log(X_or_O);
                       this.innerHTML = "X"; 
                       turn.innerHTML = "O Turn Now";
                       getWinner();
                       X_or_O += 1;
                       
                    }
                    else
                    {
                        console.log(X_or_O);
                       this.innerHTML = "O";
                       turn.innerHTML = "X Turn Now";
                       getWinner();
                       X_or_O += 1;  
                    }
                }
                    
                };
            }
            function replay()
            	{
                	for(var i = 0; i < boxes.length; i++){
                    boxes[i].classList.remove("win");
                    boxes[i].innerHTML = "";
                    turn.innerHTML = "Play";
                    turn.style.fontSize = "25px";
                }
                
            }
            
        </script>
        
    </body>
</html>