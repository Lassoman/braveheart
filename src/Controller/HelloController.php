<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController
{

/**
 * @Route("/hello/{prenom?world}", name="hello")
 */

public function hello ($prenom = "World", LoggerInterface $logger, Calculator $calculator, Slugify $slugify)
    {
        
        

        dump($slugify->slugify("hello world"));
        
        $logger->error("Mon message de log !");
        
        $tva= $calculator->calcul(100);

        dump($tva);

        return new Response( "hello $prenom");
    }
}