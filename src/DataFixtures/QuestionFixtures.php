<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class QuestionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $question = new question();
        $question->setText('Comment tu vas ?');
        $manager->persist($question);


        $answer = new answer();
        $answer->setText('réponse 1');
        $answer->setCorrect(false);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $answer = new answer();
        $answer->setText('réponse 2');
        $answer->setCorrect(true);
        $answer->setQuestion($question);
        $manager->persist($answer);

        $manager->persist($quetion);
        $manager->persist($answer);
        $manager->flush();
    }
}
