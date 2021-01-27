<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Levels | EncredX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css" />
    <link rel="stylesheet" href="/encredx/lvls/enc-style.css" />
    <script>
        function toggleBurger() {
            var burger = document.getElementsByClassName("burger")[0];
            var menu = document.getElementsByClassName('navbar-menu')[0];
            burger.classList.toggle('is-active');
            menu.classList.toggle('is-active');
        }
    </script>
    <style>
        span {
            color: white;
            font-size: 2em;
        }
    </style>
    <meta charset="utf-8">

</head>

<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <h4><b>EncredX</b></h4>
            </a>

            <a role="button" class="navbar-burger burger" onclick="toggleBurger()" aria-label="menu"
                aria-expanded="false" data-target="hhcnavbar">
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

                <a class="navbar-item" href="encredx/lvls/leaderboard.php">
                    Leaderboard
                </a>

                <a class="navbar-item" href="rules.php">
                    Rules
                </a>

            </div>
        </div>
    </nav>
    <div class="parent">
        <div class="levels">
            <a href="/encredx/lvls/anonymous.php">
                <li>Level 0</li>
            </a>
            <a href="/encredx/lvls/dance.php">
                <li>Level 1</li>
            </a>
            <a href="/encredx/lvls/paperplane.php">
                <li>Level 2</li>
            </a>
            <a href="/encredx/lvls/force.php">
                <li>Level 3</li>
            </a>
            <a href="/encredx/lvls/larry.php">
                <li>Level 4</li>
            </a>
            <a href="/encredx/lvls/version.php">
                <li>Level 5</li>
            </a>
            <a href="/encredx/lvls/rainbow.php">
                <li>Level 6</li>
            </a>
            <a href="/encredx/lvls/private.php">
                <li>Level 7</li>
            </a>
            <a href="/encredx/lvls/abcdetowxyzinc.php">
                <li>Level 8</li>
            </a>
            <a href="/encredx/lvls/tseries.php">
                <li>Level 9</li>
            </a>
        </div>
    </div>

</body>

</html>