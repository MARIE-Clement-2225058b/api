<?php

namespace App\DataFixtures;

use App\Entity\Citation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class AppFixtures extends Fixture
{
    private HttpClientInterface $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function load(ObjectManager $manager): void
    {
        try {
            // Appeler l'API pour récupérer des citations
            $response = $this->httpClient->request(
                'GET',
                'https://api.quotable.io/quotes?limit=10',
                [
                    'verify_peer' => false, // Désactive la vérification du certificat SSL
                    'verify_host' => false,
                ]
            );

            $quotes = $response->toArray();

            if (isset($quotes['results']) && is_array($quotes['results'])) {
                foreach ($quotes['results'] as $quoteData) {
                    if (isset($quoteData['content'], $quoteData['author'])) {
                        $citation = new Citation();
                        $citation->setCitation($quoteData['content']);
                        $citation->setAuteur($quoteData['author']);
                        $citation->setExiste(true);
                        $manager->persist($citation);
                    }
                }

                $manager->flush();
                echo "Fixtures de citations importées avec succès !";
            } else {
                echo "Aucune citation trouvée dans la réponse de l'API.";
            }
        } catch (\Exception $e) {
            echo 'Erreur lors de la récupération des citations : ' . $e->getMessage();
        }
    }
}
