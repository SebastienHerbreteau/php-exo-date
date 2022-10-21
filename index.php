<?php
//------1
$time = time();
echo "A cet instant, le timestamp est : ", $time, "<br>";
echo date("d-m-Y h:i:sa", $time), "<br>";

//------2
$bd = mktime(0, 0, 0, 10, 14, 1980);
$datebd = $time - $bd;
$year = $datebd / 31556926;
$days = ((($datebd % 31556926) / 60) / 60) / 24;

echo "J'ai " . round($year) . " ans, ", round($days) . " jours, ";

$test = (($datebd % 31556926) / 60) / 60;
echo $days . "<br> <br>";
//------3

if (checkdate(02, 29, 1962)) {
    echo "29 février 1962 : date valide <br> <br>";
} else {
    echo "29 février 1962 : date invalide <br> <br>";
}

//------4
$date =  date("l", mktime(0, 0, 0, 3, 3, 1993));
setlocale(LC_TIME, 'fr_FR');

echo "Le 3 mars 1993 était un " . $date, "<br> <br>";





//------5

for ($i = 2005; $i <= 2052; $i++) {
    if (checkdate(02, 29, $i)) {
        echo $i . "<br>";
    }
};
//------6



for ($i = 2023; $i <= 2030; $i++) {
    if (date("l", mktime(0, 0, 0, 5, 1, $i)) === 'Sunday' || date("l", mktime(0, 0, 0, 5, 1, $i)) === 'Saturday') {
        echo "En $i pas de bol, ça tombe un week-end <br>";
    } elseif (date("l", mktime(0, 0, 0, 5, 1, $i)) === "Monday" || date("l", mktime(0, 0, 0, 5, 1, $i)) === "Friday") {
        echo "En $i Week-end prolongé <br>";
    }
}
