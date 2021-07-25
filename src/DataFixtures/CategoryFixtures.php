<?php


namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
        'Horreur',
        'Aventure',
        'Humour',
        'Action',
        'Science-fiction',
        'Policier'
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
            $this->setReference('category_' . $key, $category);
        }
        $manager->flush();
    }
}
