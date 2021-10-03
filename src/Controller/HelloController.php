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

public function hello ($prenom = "World", Environment $twig)
    {
       
        $html = $twig->render('hello.html.twig', [
            'prenom' => $prenom,
            'age' => '33',
            'prenoms' => [ 'lasso', 'vass', 'mohamed','bertrand', 'zoumana','falikou','binta','soyleyman','mario']
        ]);
        return new Response($html);
    }
}