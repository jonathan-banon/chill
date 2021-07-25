<?php


namespace App\DataFixtures;


use App\Entity\Serie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class SerieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $serie = new Serie();
        $serie->setName('Srcubs');
        $serie->setImage('scrubs.jpg');
        $serie->setLink('https://www.allocine.fr/series/ficheserie_gen_cserie=98.html');
        $serie->setIsAvailable(true);
        $serie->setCategory($this->getReference('category_2'));
        $manager->persist($serie);

        $serie = new Serie();
        $serie->setName('Casa de papel');
        $serie->setImage('casa-de-papel.jpeg');
        $serie->setLink('https://www.allocine.fr/article/fichearticle_gen_carticle=18699745.html');
        $serie->setIsAvailable(true);
        $serie->setCategory($this->getReference('category_3'));
        $manager->persist($serie);


        $serie = new Serie();
        $releaseDate = new DateTime();
        $serie->setName('Star Wars Kennoby');
        $serie->setImage('kennobi.jpeg');
        $serie->setLink('https://www.allocine.fr/series/ficheserie_gen_cserie=25501.html');
        $serie->setIsAvailable(false);
        $releaseDate->setDate(2022, 01, 01);
        $serie->setReleaseDate($releaseDate);
        $serie->setCategory($this->getReference('category_2'));
        $manager->persist($serie);

        $manager->flush();
    }
}
