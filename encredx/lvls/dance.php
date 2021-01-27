<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><title>Bandana</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css"/>
        <link rel="stylesheet" href="enc-style.css"/>
       <script>
        function toggleBurger() {
            var burger = document.getElementsByClassName("burger")[0];
            var menu = document.getElementsByClassName('navbar-menu')[0];
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        }
    </script>
<style>
       span{
        color :white;
        font-size: 2em;
    }
</style>
    <meta charset="utf-8">
    
  </head><body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
              <a class="navbar-item" href="#">
                <h4><b>EncredX</b></h4>
              </a>
          
              <a role="button" class="navbar-burger burger" onclick="toggleBurger()" aria-label="menu" aria-expanded="false" data-target="hhcnavbar">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
          
            <div id="hhcnavbar" class="navbar-menu">
              <div class="navbar-start">
              <a class="navbar-item" href="/encredx/index.php">
                            Level
                        </a>
          
                <a class="navbar-item" href="leaderboard.php">
                  Leaderboard
                </a>
    
                <a class="navbar-item" href="rules.php">
                    Rules
                  </a>
                
    
            </div>
            </div>
          </nav>
        <div class="parent">
            
            <span><h1>Level 1</h1></span><br>
            
          <form action="" method="POST">
            
            <div class="Question">
                <audio controls>
                <source src="data/atod.mp3" />
                </audio>
            </div><br>
            <!--<img src="data/0ds3nc94fncv.svg" style="width:500px; height:250px;">-->
            
            <div><input name="Answer" type="text"></div><br>
            <div><input type="submit" name="submit" value = "SUBMIT"></div>
        </form>
        </div>
        
    </body>
</html>
