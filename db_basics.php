<?php

include 'connectie.php';


// laten we beginnen door een enkele boek op te halen en zijn titel te printen (echo)
$query = "select title from books limit 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_row($result);

echo "De titel van een random boek: $row[0]"; // wat doet de [0] eigenlijk? probeer de regel hierna te runnen en kijk wat $row daadwerkelijk is
//var_dump($row);


/*

// dit keer gaan we alle boeken ophalen en ze allemaal printen
$query = "select * from books";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {

    echo "Titel: ${row['title']}\n"; // woww okay lekker veel tekens hold up--

    // je kan variabelen tussen aanhalingstekens gebruiken aan de hand van de ${variabel} notatie
    echo "Titel: " . row['title'];
    echo "Titel: ${row['title']}";

    // de "\n" vertelt php dat ie een nieuwe regel moet aanmaken, anders printen we alle boeken in een regel achter elkaar

    // nu dat we dit weten, zullen we ook gelijk de genre en auteur erbij tonen?
}

*/