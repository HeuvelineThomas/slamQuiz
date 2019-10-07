<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $category = new Category();
        $category->setShortname('Symf4');
        $category->setLongname('Symfony version');
        $manager->persist($category);

        $category = new Category();
        $category->SetShortname('PHP');
        $category->SetLongname('Langage PHP');
        $manager->persist($category);

        $category = new Category();
        $category->setShortname('POO');
        $category->setLongname('Programmation Orientée Objet');
        $manager->persist($category);

        $manager->flush();
    }
}
