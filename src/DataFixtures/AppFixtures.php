<?php

namespace App\DataFixtures;

use App\Entity\Citation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

// on insert des citations inspirantes
$citations = [
    ["Le succès, c'est d'aller d'échec en échec sans perdre son enthousiasme.", "Winston Churchill", true],
    ["Soyez le changement que vous voulez voir dans le monde.", "Mahatma Gandhi", true],
    ["Les grandes réalisations sont toujours précédées par de grandes idées.", "Albert Einstein", false],
    ["Un jour, nous vivrons tous dans des maisons faites de chocolat et de marshmallow.", "Inconnu", false],
    ["La seule limite à notre épanouissement de demain est nos doutes d'aujourd'hui.", "Franklin D. Roosevelt", true],
    ["La patience est la clé du succès, sauf si vous attendez que les pizzas tombent du ciel.", "Un sage anonyme", false],
    ["Les licornes existent, elles se cachent juste très bien.", "Un explorateur intrépide", false],
    ["Ne jugez pas chaque jour à la récolte que vous faites mais aux graines que vous semez.", "Robert Louis Stevenson", true],
    ["Le talent, c'est comme l'électricité. On ne sait pas trop ce que c'est, mais ça peut illuminer une pièce.", "Maya Angelou", true],
    ["Si vous croyez en vous autant que votre chat croit être un lion, vous réussirez.", "Un sage du web", false],
];

foreach ($citations as [$text, $author, $exists]) {
    $citation = new Citation();
    $citation->setCitation($text);
    $citation->setAuteur($author);
    $citation->setExiste($exists);
    $manager->persist($citation);
}

        $manager->flush();
    }
}