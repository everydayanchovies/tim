<?php

include 'connectie.php';

// een tool die ik gebruik om nep data te genereren
require_once 'Faker/src/autoload.php';
$faker = Faker\Factory::create();
// echo $faker->name;

// hier maak ik alvast een lijst van 10 random genres aan.
$genres = [];
for ($i = 0; $i < 10; $i++) {
    $genres[] = $faker->text(10);
}

/**
 * Maakt een neppe boek aan.
 *
 * @param $link mysqli dit is de link met de db die je hebt aangemaakt door connectie.php te includen.
 * @param $title
 * @param $author
 * @param $genre
 * @return bool Returnt of het gelukt is of niet, de !! is een geadvanceerde feature. Het betekent "niet niet" en het is alleen
 * gelijk aan true wanneer de waarde niet false is.
 */
function generate_book($link, $title, $author, $genre): bool
{
    $query = "insert into books (title, author, genre) values ('$title', '$author', '$genre')";
    return !!mysqli_query($link, $query);
}

// nou laten we maar een honderd fake boeken aanmaken
for ($i = 0; $i < 100; $i++) {
    $title = $faker->text(30);
    $author = $faker->name;
    $genre = $genres[array_rand($genres)];

    // best handig dat dit een functie is, zo is het overzichtelijk
    generate_book($link, $title, $author, $genre);
}
