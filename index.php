<?php
// database connection to real server

if ($_SERVER['SERVER_ADMIN'] == 'webmaster@match-match.idan.work') {
    $dbcon = 'mysql:host=localhost;dbname=match_match_db;charset=utf8';
    $db = new PDO($dbcon, 'portu', 'porty3709');
} else {
    $dbcon = 'mysql:host=localhost;dbname=match_match_db;charset=utf8';
    $db = new PDO($dbcon, 'root', '');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Match Match</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

       
        <div class="container">
            <h1 class="text-center display-4">Match Match</h1>
            <h4 class="text-center lead">Test your memory and your match skills!</h4>
            <div class="question row">
                <div class="col-sm-4 m-auto p-2 text-center select">
                    <select class="form-control difficulty-level">
                        <option value="10">Choose how long cards will be open</option>
                        <option value="1">0.1 second</option>
                        <option value="5">0.5 second</option>
                        <option value="10">1 second</option>
                        <option value="30">3 seconds</option>
                    </select>
                    <h4 class="lead">1 or 2 players?</h4>
                    <select class="form-control" id="select-player">
                        <option value="">Choose...</option>
                        <option value="1">1 player</option>
                        <option value="2">2 players</option>
                    </select> 
                </div>

            </div>
            <div class="match-content">
                <div class="row">
                    <div class="col best-TM">
                        <span>Moves: <span id="show-moves"></span></span><br>
                        <span>Time: <span id="show-time"></span></span><br>
                    </div>
                </div>


                <div id="matchMacth">
                    <div class="row mx-lg-5">
                        <div class="col-2 mcard p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>

                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>

                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                        <div class="col-2 mcard m-0 p-0">
                            <img class="animalCards img-fluid w-100" src="#">
                            <img src="images/backOfCard.png" class="backOfCards img-fluid w-100" alt="backOfCards">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="container">

            <div class="row">

                <div class="m-auto py-3 text-dark two-players">
                    <div class="form m-auto form-signin text-center">
                        <h3 class="mb-3 font-weight-normal">Please enter your names:</h3>
                        <label for="fplayer" class="sr-only">Enter player 1 name:</label>
                        <input type="text" id="fplayer" class="form-control form-control-lg enter-name" placeholder="Enter player 1 name">
                        <label for="splayer" class="sr-only">Enter player 2 name:</label>
                        <input type="text" id="splayer" class="form-control form-control-lg enter-name" placeholder="Enter player 2 name">
                        <input type="button" id="start-game" value="Start game" class="mt-3 btn btn-primary btn-block">
                        <span class="error"></span>
                    </div>
                </div>
                <div class="m-auto py-3 text-dark one-player">
                    <div class="form m-auto form-signin text-center">
                        <h3 class="mb-3 font-weight-normal">Please enter your name:</h3>
                        <label for="one-player" class="sr-only">Enter your name:</label>
                        <input type="text" id="one-player" class="form-control form-control-lg" placeholder="Enter your name">
                        <label for="difficulty-level-one-player" class="sr-only">Difficulty level:</label>
                        <input type="button" id="start-game-one-player" value="Start game" class="btn btn-lg mt-3 btn-primary btn-block">
                        <span class="error"></span>
                    </div>
                </div>

            </div>  
            <div class="row stats">
                <div class="col-sm-6 offset-sm-3">
                    <div class="text-center">
                        <p class="which-turn h3"></p>
                        <div class="h5">
                            <span id="p1"></span> <span id="cards-fst-player"></span><br>
                            <span id="p2"></span> <span id="cards-snd-player"></span>  
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container hall-div">
            <h2 class="text-center">Hall Of Fame</h2>
            <div class="row">
                <div class="col-12 m-auto">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name:</th>
                                <th scope="col">Time:</th>
                                <th scope="col">Date:</th>
                            </tr>
                        </thead>
                        <tbody class="hall-of-fame"></tbody>
                    </table>
                    <input type="button" class="high-score-show-more btn btn-info btn-block btn-block" value="Show the top 5">
                </div>

            </div>
        </div>
        <footer class="container">
            <hr>
            <p class="text-center"> &copy; <?= date('Y'); ?> </p>
        </footer>
        <div class="demo"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="firewoks-jquery/jquery.fireworks.js"></script>
        <script src="functions.js"></script>
        <script src="match_match_game.js" type="text/javascript"></script>

    </body>
</html>