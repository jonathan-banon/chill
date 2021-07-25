<?php


namespace App\DataFixtures;


use App\Entity\Game;
use App\Entity\Platform;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use DateTime;

class GameFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {

        $platform = new Platform();
        $platform->setName('PC');
        $this->addReference('PC', $platform);
        $manager->persist($platform);

        $platform = new Platform();
        $platform->setName('PS4');
        $this->addReference('PS4', $platform);
        $manager->persist($platform);


        $game = new Game();
        $game->setName('Ori');
        $game->setPlatform($this->getReference('PC'));
        $game->setCategory($this->getReference('game_category_1'));
        $game->setIsAvailable(true);
        $game->setImage('ori.jpeg');
        $game->setLink('https://www.nintendo.fr/Jeux/Jeux-a-telecharger-sur-Nintendo-Switch/Ori-and-the-Blind-Forest-Definitive-Edition-1621526.html');
        $manager->persist($game);

        $game = new Game();
        $releaseDate = new DateTime();
        $game->setName('Diablo4');
        $game->setPlatform($this->getReference('PS4'));
        $game->setCategory($this->getReference('game_category_2'));
        $game->setIsAvailable(false);
        $releaseDate->setDate(2021, 10, 22);
        $game->setReleaseDate($releaseDate);
        $game->setImage('diablo4.jpg');
        $game->setLink('https://www.nintendo.fr/Jeux/Jeux-a-telecharger-sur-Nintendo-Switch/Ori-and-the-Blind-Forest-Definitive-Edition-1621526.html');
        $manager->persist($game);


        $manager->flush();
    }
}
