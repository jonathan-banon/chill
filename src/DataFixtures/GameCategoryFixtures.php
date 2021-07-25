<?php


namespace App\DataFixtures;


use App\Entity\GameCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class GameCategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Decouverte',
        'Aventure',
        'Coop',
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $name) {
            $gameCategory = new GameCategory();
            $gameCategory->setName($name);
            $manager->persist($gameCategory);
            $this->addReference('game_category_' . $key, $gameCategory);
        }
        $manager->flush();
    }
}
