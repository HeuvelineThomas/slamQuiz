<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Answer;

class AnswerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $answer = new answer();
        $answer->setText('réponse 1');
        $answer->setCorrect(false);
        $manager->persist($answer);

        $answer = new answer();
        $answer->setText('réponse 2');
        $answer->setCorrect(true);
        $manager->persist($answer);

        $manager->flush();
    }
}
