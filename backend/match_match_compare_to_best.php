<?php

if ($_SERVER['SERVER_ADMIN'] == 'webmaster@match-match.idan.work') {
    $dbcon = 'mysql:host=localhost;dbname=match_match_db;charset=utf8';
    $db = new PDO($dbcon, 'portu', 'porty3709');
} else {
    $dbcon = 'mysql:host=localhost;dbname=match_match_db;charset=utf8';
    $db = new PDO($dbcon, 'root', '');
}

$top_five_time = "SELECT * FROM best_players ORDER BY best_time ASC, date DESC LIMIT 20";
if (!empty($_GET['fullTable']) && $_GET['fullTable'] == 5) {
    $top_five_time = "SELECT * FROM best_players ORDER BY best_time ASC, date DESC LIMIT 5";
}

$import_top_time = $db->query($top_five_time)
        ->fetchAll(PDO::FETCH_ASSOC);
if (isset($import_top_time[19])) {
    $current_time = $import_top_time[19]['best_time'];
} else {
    $current_time = $import_top_time[4]['best_time'];
}


if (isset($_GET['totalTime'])) {
    if ($_GET['totalTime'] < $current_time) {
        $name = trim(filter_var($_GET['name'], FILTER_SANITIZE_STRING));
        $time = trim(filter_var($_GET['totalTime'], FILTER_SANITIZE_STRING));

        $current_time = $time;
        if ($name && $time) {
            $insert_query_sql = "INSERT INTO best_players VALUES('', ?, ?, NOW())";
            $insert_query = $db->prepare($insert_query_sql);
            $insert_query->execute([$name, $time]);

            $import_top_time = $db->query($top_five_time)
                    ->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}

echo json_encode($import_top_time);



