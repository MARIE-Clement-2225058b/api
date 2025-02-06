<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Citation;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $citations = [
            ["La vie est un mystère qu'il faut vivre, et non un problème à résoudre.", "Gandhi"],
            ["Le succès, c'est tomber sept fois, se relever huit.", "Proverbe japonais"],
            ["Faites que le rêve dévore votre vie afin que la vie ne dévore pas votre rêve.", "Saint-Exupéry"],
            ["Le seul vrai échec est l'abandon.", "Confucius"],
            ["Il n'y a pas de hasard, il n'y a que des rendez-vous.", "Paul Éluard"],
            ["L'imagination est plus importante que le savoir.", "Albert Einstein"],
            ["La connaissance parle, mais la sagesse écoute.", "Jimi Hendrix"],
            ["Le bonheur n'est pas quelque chose de prêt à l'emploi. Il vient de vos propres actions.", "Dalai Lama"],
            ["La plus grande gloire n'est pas de ne jamais tomber, mais de se relever à chaque chute.", "Nelson Mandela"],
            ["La vie est ce qui arrive quand vous êtes occupé à faire d'autres projets.", "John Lennon"]
        ];

        for ($i = 0; $i < 10; $i++) {
            $data = $citations[array_rand($citations)];

            $citation = new Citation();
            $citation->setTexte($data[0])
                ->setAuteur($data[1]);

            $manager->persist($citation);
        }

        $manager->flush();
    }
}
