<?php
    session_start();
    if (!isset($_SESSION['UserName'])) {
        header('location:../../index.html');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ludo Game</title>
    <link rel="stylesheet" href="main.css">
<!--    <link rel="stylesheet" href="dice.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/ico" href="../../logo/logo.png">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />

</head>

<body>
 <audio id="diceSound">
  <source src="dice.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="killedSound">
  <source src="killed.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="winSound">
  <source src="win.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="inoutSound">
  <source src="inout.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="stepSound">
  <source src="step.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
  <div class="fixed">
   <div class="welcome">
       <div class="setting">
           <div class="logo">
               <img src="icon.png" class="logo">
           </div>
           <div class="name">
               <input type="text" class="ri" placeholder="Red player name...">
               <input type="text" class="gi" placeholder="Green player name...">
               <input type="text" class="yi" placeholder="Yellow player name...">
               <input type="text" class="bi" placeholder="Blue player name..."><br>
               <button class="play">Play</button><br>
               <span class="note">You can play 2 players or, 4 players.</span>
           </div>
           <div class="footer">Created by Bekrom Roy</div>
       </div>
   </div>
    <div class="mainframe">
       <div class="diceboard">
           <div class="info">
               <span class="playername">
                  Player 1 
               </span>
               <div class="r-dice" onclick="dice(this,0)">
                   0
               </div>
           </div>
           <div class="info">
               
               <div class="b-dice" onclick="dice(this,3)">
                   0
               </div>
               <span class="playername">
                  Player 4 
               </span>
           </div>
       </div>
       
       <div class="mdiceboard">
           <div class="info">
               <span class="mplayername">
                  Player 1 
               </span>
               <div class="r-dice" onclick="dice(this,0)">
                   0
               </div>
           </div>
           <div class="info">
                <span class="mplayername">
                  Player 2 
               </span>
               <div class="g-dice" onclick="dice(this,1)">
                   0
               </div>
              
           </div>
       </div>
        <div class="ludoboard">
            <div class="red">
                <div class="playerzone">
                <div class="player"><span onclick="movered(this,0)" class="rp r material-icons">stars</span></div>
                <div class="player"><span onclick="movered(this,1)" class="rp r material-icons">stars</span></div>
                <div class="player"><span onclick="movered(this,2)" class="rp r material-icons">stars</span></div>
                <div class="player"><span onclick="movered(this,3)" class="rp r material-icons">stars</span></div>
                </div>
            </div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="green">
                <div class="playerzone">
                <div class="player"><span onclick="movegreen(this,0)" class="rp g material-icons">stars</span></div>
                <div class="player"><span onclick="movegreen(this,1)" class="rp g material-icons">stars</span></div>
                <div class="player"><span onclick="movegreen(this,2)" class="rp g material-icons">stars</span></div>
                <div class="player"><span onclick="movegreen(this,3)" class="rp g material-icons">stars</span></div>
                </div>
            </div>
            
            <div class="astep step"></div>
            <div class="astep greensafe"></div>
            <div class="astep gstop"></div>
            <div class="astep step rstop"></div>
            <div class="astep greensafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep greensafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep greensafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep greensafe"></div>
            <div class="astep step"></div>
            
            <div class="astep step"></div>
            <div class="astep rstop"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            
            <div class="centerbox"></div>
            
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step gstop"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            
            <div class="astep step"></div>
            <div class="astep redsafe"></div>
            <div class="astep redsafe"></div>
            <div class="astep redsafe"></div>
            <div class="astep redsafe"></div>
            <div class="astep redsafe"></div>
            
            <div class="astep yellowsafe"></div>
            <div class="astep yellowsafe"></div>
            <div class="astep yellowsafe"></div>
            <div class="astep yellowsafe"></div>
            <div class="astep yellowsafe"></div>
            <div class="astep step"></div>
            
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step bstop"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep ystop"></div>
            <div class="astep step"></div>
            
            
            
            
            <div class="blue">
                <div class="playerzone">
                <div class="player"><span onclick="moveblue(this,0)" class="rp b b material-icons">stars</span></div>
                <div class="player"><span onclick="moveblue(this,1)" class="rp b b material-icons">stars</span></div>
                <div class="player"><span onclick="moveblue(this,2)" class="rp b b material-icons">stars</span></div>
                <div class="player"><span onclick="moveblue(this,3)" class="rp b b material-icons">stars</span></div>
                </div>
            </div>
            <div class="astep step"></div>
            <div class="astep bluesafe"></div>
            <div class="astep step"></div>
            <div class="yellow">
                <div class="playerzone">
                <div class="player"><span onclick="moveyellow(this,0)" class="rp y material-icons">stars</span></div>
                <div class="player"><span onclick="moveyellow(this,1)" class="rp y material-icons">stars</span></div>
                <div class="player"><span onclick="moveyellow(this,2)" class="rp y material-icons">stars</span></div>
                <div class="player"><span onclick="moveyellow(this,3)" class="rp y material-icons">stars</span></div>
                </div>
            </div>
            
            <div class="astep step"></div>
            <div class="astep bluesafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep bluesafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep bluesafe"></div>
            <div class="astep step ystop"></div>
            <div class="astep bstop"></div>
            <div class="astep bluesafe"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
            <div class="astep step"></div>
        </div>
        <div class="diceboard">
           <div class="info">
               <span class="playername">
                  Player 2 
               </span>
               <div class="g-dice" onclick="dice(this,1)">
                   0
               </div>
           </div>
           <div class="info">
               <div class="y-dice" onclick="dice(this,2)">
                   0
               </div>
               <span class="playername">
                  Player 3
               </span>
           </div>
       </div>
       
       <div class="mdiceboard">
           <div class="info" style="background-color: #0f3fff">
               <div class="b-dice" onclick="dice(this,3)">
                   0
               </div>
               <span class="mplayername">
                  Player 4 
               </span>
           </div>
           <div class="info">
               <div class="y-dice" onclick="dice(this,2)">
                   0
               </div>
               <span class="mplayername">
                  Player 3
               </span>
           </div>
       </div>
    </div>
    <script>
//    $stepcount = document.getElementsByClassName("astep");
//        for(i=0;i<$stepcount.length;i++){
//            $stepcount[i].innerHTML=i;
//        }
    </script>

<script src="logic.js"></script>
    </div>
</body>
</html>