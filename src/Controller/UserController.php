<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/index", name="user_index")
     */
    public function index() {
        $userList = array();

        $userList[0]['first_name'] = "Michel";
        $userList[0]['last_name'] = "Dupont";
        $userList[1]['first_name'] = "Bertrant";
        $userList[1]['last_name'] = "Dumaine";
        

        return $this->render('user/user.html.twig', [
            'users_list' => $userList
        ]);
      
    }

}
