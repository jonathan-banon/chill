<?php


namespace App\DataFixtures;


use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $film = new Film();
        $film->setName('La ligne verte');
        $film->setImage('la-ligne-verte.jpeg');
        $film->setLink('https://www.allocine.fr/film/fichefilm_gen_cfilm=22779.html');
        $film->setIsAvailable(true);
        $film->setCategory($this->getReference('category_5'));
        $manager->persist($film);

        $film = new Film();
        $releaseDate = new DateTime();
        $film->setName('Avatar 2 ');
        $film->setImage('avatar2.jpeg');
        $film->setLink('https://www.allocine.fr/film/fichefilm_gen_cfilm=178014.html');
        $film->setIsAvailable(false);
        $releaseDate->setDate(2020, 12, 16);
        $film->setCategory($this->getReference('category_4'));
        $manager->persist($film);


        $film = new Film();
        $film->setName('Alita');
        $film->setImage('alita.jpeg');
        $film->setLink('https://www.allocine.fr/film/fichefilm_gen_cfilm=271794.html');
        $film->setIsAvailable(true);
        $film->setCategory($this->getReference('category_4'));
        $manager->persist($film);

        $manager->flush();
    }
}
