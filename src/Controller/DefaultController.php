<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index() {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    /**
     * @Route("/user", name="user")
     */
    public function user() {
        $last_name = "CHIRAC";
        $first_name = "Jacques";
        return $this->render('default/user.html.twig', [
            'first_name'=>$first_name,
            'last_name' =>$last_name,
        ]);
    }
}
