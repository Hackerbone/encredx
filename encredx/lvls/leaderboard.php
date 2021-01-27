
<!DOCTYPE html>
<html>
    <head>
        <title>LEADERBOARD | Encredx</title>
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
     table{
         padding-top : 4%;
         width:80%;
         height:100%;
         align-self:center;
         overflow:auto;
     }
    .parent{
        width: 67vw;
        /*height:100vh;*/
        margin-top:3%;
        padding-top:20%;
        position: absolute;
        top:20px;
        left:20%;
    }  
    </style>
    </head>
    <body>
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
                          <a class="navbar-item" href="logout.php">
                            Logout
                          </a>
                    </div>
                    </div>
                  </nav>
        <!--<div class="parent" style="flex-direction: column; overflow-y:auto;">-->
        <center>
            <h1 style="color:#eee;font-size:5em;">LEADERBOARD</h1>
            <table>
            <tr>
              <th>Rank</th>
              <th>Username</th>
              <th>School</th>
              <th>Level</th>
            </tr>
               
        </table>
</center>
          <!--</div>-->
    </body>
</html>