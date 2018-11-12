// function takes the src values and put it at the img element with animalCards class  
function srcToAnimalCards(srcArray) {
    $.each($animalCards, function (i) {
        $(this).attr('src', srcArray[i]);
    });
}

// fade in cards animation
function startGameFade() {
    $('.backOfCards').each(function (i) {
        $(this).delay(80 * i).fadeIn(300);
    });
}

// show the seconds
function showSeconds() {
    second++;
    $('#show-time').text(second + ' seconds');
}

function dateConversion(dateFormat) {
    let date = new Date(dateFormat);
    // converrt to unix time because MySQL TIME ZONE OF IPAGE (divide 1000 because mili-seconds):
    let unixTime = date.getTime() / 1000;
    // 36000 seconds = 10 hours: the difference of the times between israel and mysql godaddy servers:
    unixTime += 36000;
    // the israeli time zone:
    let updatedTime = new Date(unixTime * 1000);
    let dd = updatedTime.getDate();
    let mm = updatedTime.getMonth() + 1; //January is 0! 
    let yyyy = updatedTime.getFullYear();
    let hh = updatedTime.getHours();
    let nn = updatedTime.getMinutes();
    let ss = updatedTime.getSeconds();
    if (dd < 10)
    {
        dd = '0' + dd
    }
    if (mm < 10)
    {
        mm = '0' + mm
    }
    if (hh < 10) {
        hh = '0' + hh;
    }
    if (nn < 10) {
        nn = '0' + nn;
    }
    if (ss < 10) {
        ss = '0' + ss;
    }
    return dd + '/' + mm + '/' + yyyy + ' at ' + hh + ':' + nn + ':' + ss;
}

function fireworks() {
    return $('.demo').fireworks({
        sound: false, // sound effect
        opacity: 0.9,
        width: '100%',
        height: '100%'
    });
}

function difficultyLevel() {
    return $('.difficulty-level').val();
}


