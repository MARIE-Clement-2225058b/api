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
        $citation1 = new Citation();
        $citation1->setCitation("Le succès, c'est d'aller d'échec en échec sans perdre son enthousiasme.");
        $citation1->setAuteur("Winston Churchill");
        $citation1->setExiste(true);
        $manager->persist($citation1);

        $citation2 = new Citation();
        $citation2->setCitation("Soyez le changement que vous voulez voir dans le monde.");
        $citation2->setAuteur("Mahatma Gandhi");
        $citation2->setExiste(true);
        $manager->persist($citation2);

        $citation3 = new Citation();
        $citation3->setCitation("Les grandes réalisations sont toujours précédées par de grandes idées.");
        $citation3->setAuteur("Albert Einstein");
        $citation3->setExiste(false);
        $manager->persist($citation3);

        $citation4 = new Citation();
        $citation4->setCitation("Un jour, nous vivrons tous dans des maisons faites de chocolat et de marshmallow.");
        $citation4->setAuteur("Inconnu");
        $citation4->setExiste(false);
        $manager->persist($citation4);

        $citation5 = new Citation();
        $citation5->setCitation("La seule limite à notre épanouissement de demain est nos doutes d'aujourd'hui.");
        $citation5->setAuteur("Franklin D. Roosevelt");
        $citation5->setExiste(true);
        $manager->persist($citation5);

        $citation6 = new Citation();
        $citation6->setCitation("La patience est la clé du succès, sauf si vous attendez que les pizzas tombent du ciel.");
        $citation6->setAuteur("Un sage anonyme");
        $citation6->setExiste(false);
        $manager->persist($citation6);

        $citation7 = new Citation();
        $citation7->setCitation("Les licornes existent, elles se cachent juste très bien.");
        $citation7->setAuteur("Un explorateur intrépide");
        $citation7->setExiste(false);
        $manager->persist($citation7);

        $citation8 = new Citation();
        $citation8->setCitation("Ne jugez pas chaque jour à la récolte que vous faites mais aux graines que vous semez.");
        $citation8->setAuteur("Robert Louis Stevenson");
        $citation8->setExiste(true);
        $manager->persist($citation8);

        $citation9 = new Citation();
        $citation9->setCitation("Le talent, c'est comme l'électricité. On ne sait pas trop ce que c'est, mais ça peut illuminer une pièce.");
        $citation9->setAuteur("Maya Angelou");
        $citation9->setExiste(true);
        $manager->persist($citation9);

        $citation10 = new Citation();
        $citation10->setCitation("Si vous croyez en vous autant que votre chat croit être un lion, vous réussirez.");
        $citation10->setAuteur("Un sage du web");
        $citation10->setExiste(false);
        $manager->persist($citation10);

        $manager->flush();
    }
}