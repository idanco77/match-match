let player1, player2;
// all the src's values
let animalCardsSrc = ['images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/1.jpg', 'images/2.jpg', 'images/3.jpg', 'images/4.png', 'images/5.jpg', 'images/6.jpg', 'images/4.png', 'images/5.jpg', 'images/6.jpg', 'images/7.png', 'images/8.jpg', 'images/9.jpg', 'images/7.png', 'images/8.jpg', 'images/9.jpg'];
let openCards = [];
let movesCounter = []; // count the move of the player
let second = 0;
let time = '';
let player = 0;
let counterP1 = 0;
let counterP2 = 0;

let $animalCards = $('.animalCards');


// when user click on card
function clickOnCard() {

    let animalCards = $(this).find('.animalCards');
    animalCards.css('display', 'block');
    animalCards.addClass('clicked');
    animalCards.click(false); // makes the pic unclick afer clicked
    $('.clicked').next().css('display', 'none'); // hidden the card background when clicked
    openCards.push($(this).find('.animalCards').attr('src'));
    movesCounter.push($(this).find('.animalCards').attr('src'));


    if (openCards.length == 2) {
        player++;
        if (player % 2 == 0) {
            $('.which-turn').text(player1 + '\'s turn');

        } else if (player % 2 !== 0) {
            $('.which-turn').text(player2 + '\'s turn');
        }
        ifDifferentCards();

        ifSameCards();

    }

}

function ifDifferentCards() {
    if (openCards[0] != openCards[1]) {
        if (openCards.length == 2) {
            $('.mcard').off('click', clickOnCard); // disable clickability when cards open
        }

        setTimeout(function OpenCardsDuration() {
            let clicked = $('.clicked');
            clicked.css('display', 'none');
            clicked.next().css('display', 'block'); // return the card background if not equal
            $('.mcard').on('click', clickOnCard); // return the clickability
            $animalCards.removeClass('clicked');
            openCards = [];

        }, (difficultyLevel() * 100));
    }
}

function ifSameCards() {
    let clicked = $('.clicked');
    if (openCards[0] == openCards[1]) {
        clicked.addClass('correct');
        $animalCards.removeClass('clicked');
        clicked.fadeIn('slow');
        $('.correct').click(false);
        openCards = [];
        if (player % 2 == 0) {
            counterP1++;
            $('#cards-snd-player').text(counterP1);
            $('.which-turn').text(player2 + ' you win the pair. play again');
        }
        if (player % 2 !== 0) {
            counterP2++;
            $('#cards-fst-player').text(counterP2);
            $('.which-turn').text(player1 + ' you win the pair. play again');
        }
        player--;
    }

    let showMoves = movesCounter.length / 2;
    $('#show-moves').text(showMoves + ' moves');

    //if the payer win the game:
    if ($('.correct').length == animalCardsSrc.length) {
        let totalMoves = showMoves;
        $('#hidden').text(showMoves);
        let totalTime = second;
        $('#show-time').text(clearInterval(time));
        let name = $('#one-player').val();
        fireworks();
        setTimeout(function () {
            $('.demo').remove();
        }, 8000);
        // hall of fame after the player wins
        $.ajax({
            type: 'GET',
            url: 'backend/match_match_compare_to_best.php',
            dataType: 'json',
            data: {totalTime: totalTime, name: name},
            success: function (players) {
                $('tbody.hall-of-fame').html('');
                $.each(players, function (key, player) {
                    $('tbody.hall-of-fame').append('<tr><th scope="row">' + (key + 1) + '</th><td>' + player.name + '</td><td>' + player.best_time + ' seconds</td><td>' + dateConversion(player.date) + '</td></tr>');

                });

            }
        });

    }
}
$('#start-game').on('click', function () {

    if (($('#fplayer').val().length <= 2) || ($('#splayer').val().length <= 2)) {
        $('.error').text('Enter your name please');
    } else {
        player1 = $('#fplayer').val();
        player2 = $('#splayer').val();
        $('#p1').text(player1);
        $('#p2').text(player2);
        $('.form').hide();
        startGameFade();
        $('.match-content').show();
        $('.which-turn').text(player1 + ' play first');
        
    }


});

$('#start-game-one-player').on('click', function () {
    if ($('#one-player').val().length <= 2) {
        $('.error').text('Enter your name please');
    } else {
        $('.one-player').hide();
        $('.match-content').show();
        // run the seconds counter
        time = setInterval(showSeconds, 1000);
        // fadeIn cards at the beginning of the game
        startGameFade();
        $('.stats').hide();
    }
});

$('#select-player').on('change', function () {

    let typeGame = $(this).val(); // the choice of number of players
    if (typeGame == 2) {
        $('.best-TM').hide();
        $('.match-content').hide();
        $('.two-players').show();
        $('.hall-div').hide();
    } else if (typeGame == 1) {
        $('.match-content').hide();
        $('.one-player').show();

    }
    $('.question').hide();
});




// shuffle the src's values with the compare function
animalCardsSrc = animalCardsSrc.sort(function (a, b) {
    return 0.5 - Math.random();
});

// put the shufled src's values in the animalCards class (at the html)
srcToAnimalCards(animalCardsSrc);

// clicking on card
$('.mcard').on('click', clickOnCard);

// hall of fame - when the game start
$.ajax({
    type: 'GET',
    url: 'backend/match_match_compare_to_best.php',
    dataType: 'json',
    success: function (players) {
        $.each(players, function (key, player) {

            $('tbody.hall-of-fame').append('<tr><th scope="row">' + (key + 1) + '</th><td>' + player.name + '</td><td>' + player.best_time + ' seconds</td><td>' + dateConversion(player.date) + '</td></tr>');

        });

    }
});

$('.high-score-show-more').on('click', function () {

    if ($('.high-score-show-more').val() == 'Show the top 20') {
        $.ajax({
            type: 'GET',
            url: 'backend/match_match_compare_to_best.php',
            dataType: 'json',
            success: function (players) {
                $('tbody.hall-of-fame').html('');
                $('.high-score-show-more').val('Show the top 5');
                $.each(players, function (key, player) {
                    $('tbody.hall-of-fame').append('<tr><th scope="row">' + (key + 1) + '</th><td>' + player.name + '</td><td>' + player.best_time + ' seconds</td><td>' + dateConversion(player.date) + '</td></tr>');
                });
            }
        });
    }

    if ($('.high-score-show-more').val() == 'Show the top 5') {
        $.ajax({
            type: 'GET',
            url: 'backend/match_match_compare_to_best.php',
            dataType: 'json',
            data: {fullTable: 5},
            success: function (players) {
                $('tbody.hall-of-fame').html('');
                $('.high-score-show-more').val('Show the top 20');
                $.each(players, function (key, player) {
                    $('tbody.hall-of-fame').append('<tr><th scope="row">' + (key + 1) + '</th><td>' + player.name + '</td><td>' + player.best_time + ' seconds</td><td>' + dateConversion(player.date) + '</td></tr>');
                });
            }
        });
    }
});




