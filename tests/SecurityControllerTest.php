<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
     /**
     * Login form show username, password and submit button
     */
    public function testShowLogin()
    {

        $client = null;
        $client = static::createClient();
    
        // Request /login 
        $client->request('GET', '/login');

        // Asserts that /login path exists and don't return an error
        /* 
        Ecrire ici le code pour valider le succès de la réponse HTTP,
        c'est à dire affirmer que le code de statut de la réponse est égale à 200 (Response::HTTP_OK)
        */
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
       
        
        // Asserts that the phrase "Log in!" is present in the page's title
        /* 
        Ecrire ici le code pour vérifier la présence de la phrase "Log in!" dans le titre de la page,
        c'est à dire affirmer qu'en parcourant le DOM, la balise 'html head title' contient 'Log in!'
        */ 
        $this->assertContains('<title>Log in!</title>', $client->getResponse()->getContent());

        // Asserts that the response content contains 'csrf token'
        /*
        Ecrire ici le code pour vérifier la présence du jeton csrf dans le contenu de la réponse HTTP  
        c'est à dire affirmer que le contenu de la réponse contient 'type="hidden" name="_csrf_token"'
        */
        $this->assertContains('type="hidden" name="_csrf_token"', $client->getResponse()->getContent());
        
        // Asserts that the response content contains 'input type="text" id="inputEmail"'
        /*
        Ecrire ici le code pour vérifier la présence du champ de formulaire email dans le contenu de la réponse HTTP  
        c'est à dire affirmer que le contenu de la réponse contient '<input type="email" value="" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>'
        */

        $this->assertContains('<input type="email" value="" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>', $client->getResponse()->getContent());
        
        // Asserts that the response content contains 'input type="text" id="inputPassword"'
        /*
        Ecrire ici le code pour vérifier la présence du champ de formulaire password dans le contenu de la réponse HTTP  
        c'est à dire affirmer que le contenu de la réponse contient '<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>'
        */
        $this->assertContains('<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>', $client->getResponse()->getContent());
    }
}
