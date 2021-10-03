<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController
{

/**
 * @Route("/hello/{prenom?world}", name="hello")
 */

public function hello ($prenom = "World", LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig, Detector $detector)
    {
        dump($detector->detect(101));
        dump($detector->detect(10));

        dump($twig);

        dump($slugify->slugify("hello world"));
        
        $logger->error("Mon message de log !");
        
        $tva= $calculator->calcul(100);

        dump($tva);

        return new Response( "hello $prenom");
    }
}