<?php 

    // function to check and see if any two of the players' picks are in the same game
    // takes $_POST array as argument

function gameCheck($arr)
{
    global $conn, $weekmarker;

    $value = true;

    $gamequery =   "SELECT id, home, away
                    FROM regseason 
                    WHERE week = '$weekmarker'";
    try {
        $gamecheck = $conn->query($gamequery);
        $gamecheck->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    $result = $gamecheck->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $game) {
        if (in_array($game['home'], $arr) && in_array($game['away'], $arr)) {
            $value = false;
        }
    }

    return $value;
}

function timeCheck($arr) {

    global $conn, $weekmarker, $date;

    $checkvalue = true;

    $timequery =   "SELECT home AS teamlist
                    FROM regseason 
                    WHERE week='$weekmarker' 
                    AND UNIX_TIMESTAMP(CONCAT(Start_Date, ' ', Start_Time)) - 10800 > '$date'
                    UNION
                    SELECT away AS teamlist
                    FROM regseason 
                    WHERE week='$weekmarker' 
                    AND UNIX_TIMESTAMP(CONCAT(Start_Date, ' ', Start_Time)) - 10800 > '$date'
                    ORDER BY teamlist ASC";
    try {
        $gamecheck = $conn->query($timequery);
        $gamecheck->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    
    $result = $gamecheck->fetchAll(PDO::FETCH_COLUMN);

    echo '<pre>';
    print_r($result);
    echo '</pre><br>';

    foreach ($arr as $key => $value) {
        if (!in_array($value, $result) && $key != 'submit') {
            echo $key . '<br>';
            echo $value . '<br>';
            $checkvalue = false;
            echo $checkvalue;
        }
    }

    return $checkvalue;

}

?>